<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Roomextraservices extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();

        $this->load->model("Roomextraservices_model");
    }


    public function index()
    {


        $viewData = new stdClass();
        $viewData->rows = $this->Roomextraservices_model->get_all(array(), "rank ASC");
        $this->load->view('room_extra_services', $viewData);
    }


    public function isActiveSetter()
    {

        $id = $this->input->post("id");

        $isActive = ($this->input->post("isActive") == "true") ? 1 : 0;

        $update = $this->Roomextraservices_model->update(
            array("id" => $id),
            array("isActive" => $isActive)
        );


    }


    public function newPage()
    {

        $this->load->view("new_room_extra_services");

    }

    public function addPage()
    {


        $title = array(
            "title" => $this->input->post("title")
        );

        $insert = $this->Roomextraservices_model->add($title);

        if ($insert) {

            redirect(base_url("roomextraservices"));
        } else {


            redirect(base_url("roomextraservices/newPage"));
        }


    }

    public function editPage($id)
    {

        $viewData = new stdClass();
        $viewData->row = $this->Roomextraservices_model->get(array(
            "id" => $id

        ));
        $this->load->view('edit_room_extra_services', $viewData);

    }

    public function edit($id)
    {


        $title = array(
            "title" => $this->input->post("title")
        );

        $edit = $this->Roomextraservices_model->update(

            array("id" => $id),
            $title );


        if ($edit) {

            redirect(base_url("roomextraservices"));

        }else {

            redirect(base_url("roomextraservices/editPage/$id"));
        }



    }

    public function delete($id)
    {

        $delete = $this->Roomextraservices_model->delete(array("id" => $id));

        redirect(base_url("roomextraservices"));

    }



    public function RankUpdate()
    {

        parse_str($this->input->post("data"), $data);


        $items = $data["sortId"];

        foreach ($items as $rank => $id){

            $this->Roomextraservices_model->update(

                array (

                    "id" => $id,
                    "rank !=" => $rank
                ),
                array ("rank" => $rank)

            );


        }



    }
}
