<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class gallery_model extends CI_Model
{
public function create($order,$name,$image1,$type,$season,$hname)
{
      if($season==1){
        $seasonname="Season 3";
    }
    else if($season==2){
        $seasonname="Season 4";
    }
    else if($season==3){
        $seasonname="Kabaddi World Cup 2016";
    }
    else if($season==4){
        $seasonname="Season 5";
    }
     $seasonquery = $this->season_model->getsingleseason($season);
    if($season != "" || $season != "0")
        $seasonname=$seasonquery->name;
$data=array("order" => $order,"name" => $name,"image1" => $image1,"image2" => $image2,"type" => $type,"season" => $season,"seasonname" => $seasonname,"hname" => $hname);
$query=$this->db->insert( "jpp_gallery", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("jpp_gallery")->row();
return $query;
}
function getsinglegallery($id){
$this->db->where("id",$id);
$query=$this->db->get("jpp_gallery")->row();
return $query;
}
public function edit($id,$order,$name,$image1,$type,$season,$hname)
{
      if($season==1){
        $seasonname="Season 3";
    }
    else if($season==2){
        $seasonname="Season 4";
    }
    else if($season==3){
        $seasonname="Kabaddi World Cup 2016";
    }
    else if($season==4){
        $seasonname="Season 5";
    }
     $seasonquery = $this->season_model->getsingleseason($season);
    if($season != "" || $season != "0")
        $seasonname=$seasonquery->name;
//if($image1=="")
//{
//$image1=$this->gallery_model->getimage1byid($id);
//$image1=$image1->image1;
//}
//    if($image2=="")
//{
//$image2=$this->gallery_model->getimage2byid($id);
//$image2=$image2->image2;
//}
$data=array("order" => $order,"name" => $name,"image1" => $image1,"image2" => $image2,"type" => $type,"season" => $season,"seasonname" => $seasonname,"hname" => $hname);
$this->db->where( "id", $id );
$query=$this->db->update( "jpp_gallery", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `jpp_gallery` WHERE `id`='$id'");
$query1=$this->db->query("DELETE FROM `jpp_galleryslide` WHERE `gallery`='$id'");
return $query;
}
public function getimage1byid($id)
{
$query=$this->db->query("SELECT `image1` FROM `jpp_gallery` WHERE `id`='$id'")->row();
return $query;
}
    public function getimage2byid($id)
{
$query=$this->db->query("SELECT `image2` FROM `jpp_gallery` WHERE `id`='$id'")->row();
return $query;
}
public function getdropdown()
{
    $query=$this->db->query("SELECT * FROM `jpp_gallery` ORDER BY `id` ASC")->result();
    $return=array(
    "" => "Select Option"
    );
    foreach($query as $row)
    {
    $return[$row->id]=$row->name;
    }
    return $return;
}
     public function gettypedropdown()
	{
		$return=array(
		"" => "Choose Image Size",
		"1" => "Big",
		"2" => "Small"
		);


		return $return;
	}
}
?>
