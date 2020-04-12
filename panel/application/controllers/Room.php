<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Room extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();

        $this->load->model("Room_model");
    }


    public function index()
    {


        $viewData = new stdClass();
        $viewData->rows = $this->Room_model->get_all(array(), "rank ASC");
        $this->load->view('room', $viewData);
    }


    public function isActiveSetter()
    {

        $id = $this->input->post("id");

        $isActive = ($this->input->post("isActive") == "true") ? 1 : 0;

        $update = $this->Room_model->update(
            array("id" => $id),
            array("isActive" => $isActive)
        );


    }


    public function newPage()
    {

        $this->load->view("new_room");

    }

    public function addPage()
    {

        $room_properties = implode(";", $this->input->post("room_properties"));

        $room_extra_services = implode(";", $this->input->post("room_extra_services"));




        $data = array(
            "room_code"           => $this->input->post("room_code"),
            "title"               => $this->input->post("title"),
            "detail"              => $this->input->post("detail"),
            "room_type_id"        => $this->input->post("room_type_id"),
            "room_capacity"       => $this->input->post("room_capacity"),
            "size"                => $this->input->post("size"),
            "default_price"       => $this->input->post("default_price"),
            "room_properties"     => $room_properties,
            "room_extra_services" => $room_extra_services,
            "isActive"            => 0
        );

        $insert = $this->Room_model->add($data);

        if ($insert) {

            redirect(base_url("room"));

        } else {

            redirect(base_url("room/newPage"));
        }


    }

    public function editPage($id)
    {

        $viewData = new stdClass();
        $viewData->row = $this->Room_model->get(array(
            "id" => $id

        ));
        $this->load->view('edit_room', $viewData);

    }

    public function edit($id)
    {


        $title = array(
            "title" => $this->input->post("title")
        );

        $edit = $this->Room_model->update(

            array("id" => $id),
            $title );


        if ($edit) {

            redirect(base_url("room"));

        }else {

            redirect(base_url("room/editPage/$id"));
        }



    }

    public function delete($id)
    {

        $delete = $this->Room_model->delete(array("id" => $id));

        redirect(base_url("room"));

    }

    public function RankUpdate()
    {

        parse_str($this->input->post("data"), $data);


        $items = $data["sortId"];

        foreach ($items as $rank => $id){

            $this->Room_model->update(

                array (

                    "id" => $id,
                    "rank !=" => $rank
                ),
                array ("rank" => $rank)

            );


        }



    }
}
