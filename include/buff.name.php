<?php
namespace buff;
const STR5='黑发不知勤学早,白首方悔读书迟';
function weight($value){
    return "台湾的{$value}斤是 ".(600*$value).'克.';
}