<?php
include ("obj_project.php");

class job extends obj_project {
public static $table_name="job";
protected static $db_table_fields =array("name_job","job_discribtion","img","company_name","time","city","date");
public $id;
public $name_job;
public $job_discribtion;
public $img;
public $company_name;
public $time;
public $city;
public $date;

public $upload_directory = "../img";
    public $img_placeholder = "../img";


    public  function set_file($file){

        if(empty($file) || !$file || !is_array($file)){

            $this->errors[] = "Ther was no file uploaded here";
            return false;
        }else{

        $this->img =  basename($file['name']);
        $this->tmp_path   = $file['tmp_name'];
        $this->type       = $file['type'];
        $this->size       = $file['size'];
        }
    }
            public  function save_job_and_img(){



                    if(!empty($this->errors)){

                        return false;
                    }

                    if(empty($this->img) || empty($this->tmp_path)){
                        $this->erorrs[]="the file was file was not available";
                        return false;
                    }


                    // $target_path =  SITE_ROOT . DS . 'orange_family' . DS . $this->upload_directory . DS . $this->img;
                    $target_path = "../manager/image/".$this->img;

                    if(file_exists($target_path)){
                        $this->errors[]="The file {$this->img} already exists";
                        return false;
                    }
                    if(move_uploaded_file($this->tmp_path,$this->img)){


                        if( $this->create()){

                            unset($this->tmp_path);
                            return true;
                        }

                    }else{

                        $this->errors[] = "the file directory probably does not have permission";
                        return false;
                    }




            }



    public function  img_path_placeholder(){

        return empty($this->img)? $this->img_placeholder : $this->upload_directory .DS. $this->img;
    }

}
?>