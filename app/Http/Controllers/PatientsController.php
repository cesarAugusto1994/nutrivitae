<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use Request as Req;
use Symfony\Component\HttpFoundation\Response;

class PatientsController extends Controller
{

    public function dataValidate()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:pacientes',
            'birth' => 'required|string|max:15',
            'from' => 'required|string|max:50',
            'phone' => 'required|integer|max:20',
            'gender' => 'required|string|max:15',
            'occupation' => 'required|string|max:255',
            'zip' => 'required|integer|max:8',
        ];
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data, array $validations)
    {
        return \Illuminate\Support\Facades\Validator::make($data, $validations);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.patients.index')->with('patients', Patient::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.patients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->request->all();
        $birth = \DateTime::createFromFormat('d/m/Y', $data['birth']);

        $validator = $this->validator($data, $this->dataValidate());

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = [
            'name' => $data['name'],
            'email' => $data['email'],
            'birth' => $birth->format('Ymd'),
            'from' => $data['from'],
            'phone' => $data['phone'],
            'gender' => $data['gender'],
            'occupation' => $data['occupation'],
            'zip' => $data['zip'],
        ];

        Patient::create($data);

        return redirect()->action('PatientsController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.patients.profile')->with('patient', Patient::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $patient = Patient::find($id);

            $name = Req::input('name');
            $value = Req::input('value');

            echo $name;exit;

            $patient->{$name} = $value;

            //$patient->save();

            return response()->json(
                [
                    'class' => 'success',
                    'message' => 'Salvo Com sucesso',
                ]
            );

        } catch(\Exception $e) {
            return response()->json([
                    'class' => 'error',
                    'message' => 'Error',
                ]
            );
        }
    }


    public function updateFromAjax($id)
    {
        try {
            $patient = Patient::find($id);

            $name = Req::get('name');
            $value = Req::get('value');

            $validator = $this->validator([
                $name => $value
            ], array_filter($this->dataValidate(), function($item) use ($name) {
                return $item[$name];
            }));

            if ($validator->fails()) {

                return response()->json([
                        'class' => 'error',
                        'message' => $validator,
                    ]
                );

            }

            $patient->{$name} = $value;
            
            $patient->save();

            return response()->json(
                [
                    'class' => 'success',
                    'message' => 'Salvo Com sucesso',
                ]
            );

        } catch(\Exception $e) {
            return response()->json([
                    'class' => 'error',
                    'message' => $e->getMessage(),
                ]
            );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
