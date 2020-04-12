<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Roomcategory extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();

        $this->load->model("Roomcategory_model");
    }


    public function index()
    {

        // get_all($where = array(), $order_by = "id ASC", $select = "*", $limit = array())

        $viewData = new stdClass();
        $viewData->rows = $this->Roomcategory_model->get_all(array(), "rank ASC");
        $this->load->view('room_category', $viewData);
    }


    public function isActiveSetter()
    {

        $id = $this->input->post("id");

        $isActive = ($this->input->post("isActive") == "true") ? 1 : 0;

        $update = $this->Roomcategory_model->update(
            array("id" => $id),
            array("isActive" => $isActive)
        );


    }


    public function newPage()
    {

        $this->load->view("new_room_category");

    }

    public function addPage()
    {


        $title = array(
            "title" => $this->input->post("title")
        );

        $insert = $this->Roomcategory_model->add($title);

        if ($insert) {

            redirect(base_url("roomcategory"));
        } else {


            redirect(base_url("roomcategory/newPage"));
        }


    }

    public function editPage($id)
    {

        $viewData = new stdClass();
        $viewData->row = $this->Roomcategory_model->get(array(
            "id" => $id

        ));
        $this->load->view('edit_room_category', $viewData);

    }

    public function edit($id)
    {


        $title = array(
            "title" => $this->input->post("title")
        );

        $edit = $this->Roomcategory_model->update(

            array("id" => $id),
            $title );


        if ($edit) {

            redirect(base_url("roomcategory"));

        }else {

            redirect(base_url("roomcategory/editPage/$id"));
        }



    }

    public function delete($id)
    {

        $delete = $this->Roomcategory_model->delete(array("id" => $id));

        redirect(base_url("roomcategory"));

    }



    public function RankUpdate()
    {

        parse_str($this->input->post("data"), $data);


        $items = $data["sortId"];

       foreach ($items as $rank => $id){

           $this->Roomcategory_model->update(

               array (
                   
                   "id" => $id,
                   "rank !=" => $rank
               ),
               array ("rank" => $rank)

           );


       }



    }
}
