<?php

namespace App\Http\Controllers;

use App\Paciente;
use Request;

class PacientesController extends Controller
{
    public function adicionar()
    {
        $data = Request::all();

        $this->create($data);

        return redirect()->route('consultas');

    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:pacientes',
            'nascimento' => 'required|string|max:15',
            'naturalidade' => 'required|string|max:50',
            'telefone' => 'required|integer|max:20',
            'genero' => 'required|string|max:15',
            'ocupacao' => 'required|string|max:255',
            'cep' => 'required|integer|max:8',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Paciente
     */
    protected function create(array $data)
    {
        $nascimento = \DateTime::createFromFormat('d/m/Y', $data['nascimento']);

        return Paciente::create([
            'nome' => $data['nome'],
            'email' => $data['email'],
            'nascimento' => $nascimento->format('Ymd'),
            'naturalidade' => $data['naturalidade'],
            'telefone' => $data['telefone'],
            'genero' => $data['genero'],
            'ocupacao' => $data['ocupacao'],
            'cep' => $data['cep'],
        ]);
    }
}
