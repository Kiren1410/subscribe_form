<?php

function connectToDB()
{
    return new PDO(
        'mysql:host=devkinsta_db;dbname=Subscribe_Form', 'root', '33FHSbJDi19BczVZ'
    );

}