<?php
interface Repository{
    public function getAll();
    public function getByForeingKey($arrayToFilter,$functionTofilter);
}
?>