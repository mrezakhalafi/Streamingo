<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MoviesModel extends CI_Model{

	function getMovies(){
        $this->db->select("*");
        $this->db->from("movies");
        $movie = $this->db->get()->result_array();
        return $movie;
    }

    function getMovieById($id){
        $this->db->select("*, movies.nama as mnama");
        $this->db->from("movies");
        $this->db->join("mp","movies.id = mp.movies_id");
        $this->db->join("users","users.package_id = mp.package_id");
        $this->db->where('movies.id',$id);
        $this->db->where("users.id",$this->session->userdata('id'));
        $movie = $this->db->get()->row_array();
        return $movie;
    }
}