<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use Request as Req;
use Symfony\Component\HttpFoundation\Response;

class PatientsController extends Controller
{
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return \Illuminate\Support\Facades\Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:pacientes',
            'birth' => 'required|string|max:15',
            'from' => 'required|string|max:50',
            'phone' => 'required|integer|max:20',
            'gender' => 'required|string|max:15',
            'occupation' => 'required|string|max:255',
            'zip' => 'required|integer|max:8',
        ]);
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

        $this->validator($data);

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

            $field = Req::input('field');
            $value = Req::input('value');

            $patient->{$field} = $value;

            $patient->save();

            return new \Illuminate\Http\Response(
                [
                    'class' => 'success',
                    'message' => 'Salvo Com sucesso',
                ]
            ) ;

        } catch(\Exception $e) {
            return new \Illuminate\Http\Response(
                [
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
