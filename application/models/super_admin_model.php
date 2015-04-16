<?php

/**
 * Description of super_admin_model
 *
 * @author User
 */
class Super_Admin_Model extends CI_Model{
    //put your code here
    
    public function saveCategoryInfo($data)
    {
        $this->db->insert('tbl_category',$data);
    }
    
    public function saveContentInfo($data)
    {
        $this->db->insert('tbl_content',$data);
    }
    
    public function selectAllcategory()
    {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    public function selectAllContent()
    {
        $this->db->select('*');
        $this->db->from('tbl_content');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function selectAllContentinfo()
    {
        $this->db->select('*');
        $this->db->from('tbl_content');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    public function selectContent($per_page, $offset) {
        $this->db->select('*');
        $this->db->from('tbl_content');
        
        $query = $this->db->get('', $per_page, $offset);
        foreach ($query->result() as $row)
            $data[] = $row;

        return $data;
    }
    
     /*
     * -----------------------------------------------------------------------------------------
     * About Us
     * --------------------------------------------------------------------------------------------
     */
    
    
    public function selectContentByAboutUs($per_page, $offset) {
        $this->db->select('*');
        $this->db->from('tbl_content');
        $this->db->where('category_id',2);
        
        $query = $this->db->get('', $per_page, $offset);
        foreach ($query->result() as $row)
            $data[] = $row;

        return $data;
    }
    public function deleteAboutUsByContentId($content_id)
    {
        $this->db->where('content_id',$content_id);
        $this->db->delete('tbl_content');
    }
    
    
    public function selectContentByContentId($content_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_content');
        $this->db->where('content_id',$content_id);
        $query_result=  $this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function updateAboutUsInfo($content_id,$data)
    {
        $this->db->where('content_id',$content_id);
        $this->db->update('tbl_content',$data);
    }
    
    
    
     /*
     * -----------------------------------------------------------------------------------------
     * Services
     * --------------------------------------------------------------------------------------------
     */
    
    
    public function selectContentByServices($per_page, $offset) {
        $this->db->select('*');
        $this->db->from('tbl_content');
        $this->db->where('category_id',3);
        
        $query = $this->db->get('', $per_page, $offset);
        foreach ($query->result() as $row)
            $data[] = $row;

        return $data;
    }
    public function deleteServicesByContentId($content_id)
    {
        $this->db->where('content_id',$content_id);
        $this->db->delete('tbl_content');
    }
    
    
    public function selectServicesByContentId($content_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_content');
        $this->db->where('content_id',$content_id);
        $query_result=  $this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function updateServicesInfo($content_id,$data)
    {
        $this->db->where('content_id',$content_id);
        $this->db->update('tbl_content',$data);
    }
    
    
     /*
     * -----------------------------------------------------------------------------------------
     * Gallery
     * --------------------------------------------------------------------------------------------
     */
    public function saveGalleryInfo($data)
    {
        $this->db->insert('tbl_gallery',$data);
    }
    
    public function selectImageByGallery($per_page, $offset) {
        $this->db->select('*');
        $this->db->from('tbl_gallery');
        
        $query = $this->db->get('', $per_page, $offset);
        foreach ($query->result() as $row)
            $data[] = $row;

        return $data;
    }
    public function deleteGalleryByGalleryId($gallery_id)
    {
        $this->db->where('gallery_id',$gallery_id);
        $this->db->delete('tbl_gallery');
    }
    
    
    public function selectGalleryByGalleryId($gallery_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_gallery');
        $this->db->where('gallery_id',$gallery_id);
        $query_result=  $this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function updateGalleryInfo($gallery_id,$data)
    {
        $this->db->where('gallery_id',$gallery_id);
        $this->db->update('tbl_gallery',$data);
    }
    
    
    
     /*
     * -----------------------------------------------------------------------------------------
     * LOgo Theme
     * --------------------------------------------------------------------------------------------
     */
    public function saveLogoInfo($data)
    {
        $this->db->insert('tbl_logo',$data);
    }
 
    /*
     * -----------------------------------------------------------------------------------------
     * About Me
     * --------------------------------------------------------------------------------------------
     */
    public function saveAboutMeInfo($data)
    {
        $this->db->insert('tbl_about_me',$data);
    }
 
}

?>
