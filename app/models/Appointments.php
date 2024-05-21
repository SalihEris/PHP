<?php

class Appointments
{
    private $db;



    public function getAppointment()
    {
        try {
            /**
             * Maak een sql-query die de gewenste informatie opvraagt uit de database
             */
            $sql = 'SELECT Id
                          ,phone_number
                          ,email
                          ,appointment_date
                          ,color1
                          ,color2
                          ,color3
                          ,color4
                          ,nail_biting
                          ,massage
                          ,nail_repair
                    FROM   appointments';

            /**
             * Prepare de query voor het PDO object
             */
            $this->db->query($sql);

            /**
             * Geef de opgehaalde informatie terug aan de controller
             */
            return $this->db->resultSet();
        }
        catch (Exception $e) {
            // Behandel de uitzondering hier, bijvoorbeeld loggen of een foutmelding weergeven
            echo 'Er is een fout opgetreden: ' . $e->getMessage();
        }
    }

    public function createAppointment($postArrayData) 
    {
        /**
         * Maak een sql-query die de ingevulde gegevens van het formulier
         * wegschrijft naar de database
         */
        $sql = 'INSERT INTO appointments (phone_number
                                    ,email
                                    ,appointment_date
                                    ,color1
                                    ,color2
                                    ,color3
                                    ,color4
                                    ,nail_biting
                                    ,massage
                                    ,nail_repair)
                     VALUES     (:phone_number
                                ,:email
                                ,:appointment_date
                                ,:color1
                                ,:color2
                                ,:color3
                                ,:color4
                                ,:nail_biting
                                ,:massage
                                ,:nail_repair)';

        $this->db->query($sql);

        $this->db->bind(':phone_number', $postArrayData['phone_number'], PDO::PARAM_STR);
        $this->db->bind(':email', $postArrayData['email'], PDO::PARAM_STR);
        $this->db->bind(':appointment_date', $postArrayData['date'], PDO::PARAM_STR);
        $this->db->bind(':color1', $postArrayData['color1'], PDO::PARAM_INT);
        $this->db->bind(':color2', $postArrayData['color2'], PDO::PARAM_STR);
        $this->db->bind(':color3', $postArrayData['color3'], PDO::PARAM_STR);
        $this->db->bind(':color4', $postArrayData['color4'], PDO::PARAM_STR);
        $this->db->bind(':nail_biting', $postArrayData['nail_biting'], PDO::PARAM_INT);
        $this->db->bind(':massage', $postArrayData['massage'], PDO::PARAM_INT);
        $this->db->bind(':nail_repair', $postArrayData['nail_repair'], PDO::PARAM_INT);

        return $this->db->execute();
    }

}