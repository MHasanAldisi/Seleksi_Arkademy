<?php
    function convertJSON($nama, $umur)
    {
        return json_encode(
            array(
                "name"          => $nama,
                "age"           => $umur,
                "address"       => "Tegalontar, Sragi, Pekalongan",
                "hobbies"       => array("Olahraga", "Bermain Game"),
                "is_married"    => false,
                "list_school"   => array(
                    array(
                        "name"      => "SD 01 Tegalontar",
                        "year_in"   => 2005,
                        "year_out"  => 2011,
                        "major"     => "SD"
                    ),
                    array(
                        "name"      => "SMP 01 Sragi",
                        "year_in"   => 2011,
                        "year_out"  => 2014,
                        "major"     => "SMP"
                    ),
                    array(
                        "name"      => "SMK 01 Sragi",
                        "year_in"   => 2014,
                        "year_out"  => 2017,
                        "major"     => "SMK"
                    ),
                    array(
                        "name"      => "PDD Politeknik Negeri Bandung",
                        "year_in"   => 2017,
                        "year_out"  => 2019,
                        "major"     => "Diploma II"
                    )
                ),
                "skills"        => array(
                    array(
                        "skill_name"    => "php",
                        "level"         => "beginer"
                    ),
                    array(
                        "skill_name"    => "java",
                        "level"         => "beginer"
                    ),
                    array(
                        "skill_name"    => "html",
                        "level"         => "beginer"
                    )
                ),
                "interest_in_coding"  => true
            )
        );
    }

    echo convertJSON("M.Hasan Aldisi", 20)
?>