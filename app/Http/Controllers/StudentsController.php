<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function ListStudents()
    {
        $DataSalesman = json_decode(session()->get('Datasalesman'));
        $Code_Salesman = ['code_salesman' => $DataSalesman->collaborator_code];
        
        $return = (new APisController)->APiPost('listStudents', $Code_Salesman);
        // dd($return);
        $listStudents = $return[1]["ListStudents"];
        // dd($listStudents);
        return view('studentsAll', compact('listStudents'));
    }
}
