<?php

class Appointment extends BaseController
{
    private $appointmentModel;

    public function __construct()
    {
        $this->appointmentModel = $this->model('Appointments');
    }

    public function index()
    {
        $appointments = $this->appointmentModel->getAppointment();

        $dataRows = "";

        foreach ($appointments as $appointment) {
            $dataRows .= "<tr>
                            <td>{$appointment->phone_number}</td>
                            <td>{$appointment->email}</td>
                            <td>{$appointment->appointment_date}</td>     
                            <td>{$appointment->color1}</td>
                            <td>{$appointment->color2}</td>
                            <td>{$appointment->color3}</td>           
                            <td>{$appointment->color4}</td>
                            <td>{$appointment->nail_biting}</td>
                            <td>{$appointment->massage}</td>    
                            <td>{$appointment->nail_repair}</td> 
                        </tr>";
        }

        $data = [
            'title' => 'Nailstudio',
            'dataRows' => $dataRows
        ];

        $this->view('appointment/show', $data);
    }

    
    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $result = $this->appointmentModel->createAppointment($_POST);

            

        }

        $data = [
            'title' => 'Nieuw afspraak toevoegen'
        ];

        $this->view('appointment/index', $data);
    }

}