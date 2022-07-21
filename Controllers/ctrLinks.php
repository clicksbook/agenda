<?php
class ctrLinks{
    public function getLinks($get){
        return mdlLinks::getLinks($get);
    }
}