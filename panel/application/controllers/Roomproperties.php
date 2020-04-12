<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Roomproperties extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();

        $this->load->model("Roomproperties_model");
    }


    public function index()
    {


        $viewData = new stdClass();
        $viewData->rows = $this->Roomproperties_model->get_all(array(), "rank ASC");
        $this->load->view('room_properties', $viewData);
    }


    public function isActiveSetter()
    {

        $id = $this->input->post("id");

        $isActive = ($this->input->post("isActive") == "true") ? 1 : 0;

        $update = $this->Roomproperties_model->update(
            array("id" => $id),
            array("isActive" => $isActive)
        );


    }


    public function newPage()
    {

        $this->load->view("new_room_properties");

    }

    public function addPage()
    {


        $title = array(
            "title" => $this->input->post("title")
        );

        $insert = $this->Roomproperties_model->add($title);

        if ($insert) {

            redirect(base_url("roomproperties"));
        } else {


            redirect(base_url("roomproperties/newPage"));
        }


    }

    public function editPage($id)
    {

        $viewData = new stdClass();
        $viewData->row = $this->Roomproperties_model->get(array(
            "id" => $id

        ));
        $this->load->view('edit_room_properties', $viewData);

    }

    public function edit($id)
    {


        $title = array(
            "title" => $this->input->post("title")
        );

        $edit = $this->Roomproperties_model->update(

            array("id" => $id),
            $title );


        if ($edit) {

            redirect(base_url("roomproperties"));

        }else {

            redirect(base_url("roomproperties/editPage/$id"));
        }



    }

    public function delete($id)
    {

        $delete = $this->Roomproperties_model->delete(array("id" => $id));

        redirect(base_url("roomproperties"));

    }

    public function RankUpdate()
    {

        parse_str($this->input->post("data"), $data);


        $items = $data["sortId"];

        foreach ($items as $rank => $id){

            $this->Roomproperties_model->update(

                array (

                    "id" => $id,
                    "rank !=" => $rank
                ),
                array ("rank" => $rank)

            );


        }



    }
}
