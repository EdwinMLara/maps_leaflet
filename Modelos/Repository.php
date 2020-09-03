<?php
interface Repository{
    public function getAll();
    public function getByForeingKey($arrayToFilter,$functionTofilter);
    public function deleteById($id);
    public function insert($arrayArgumentsArray);
}
?>