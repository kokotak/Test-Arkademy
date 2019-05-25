<?php

function biodata($name, $address, $hobbies, $is_married,  $school, $skills)
    {
    $data = [
        'name'=>$name,
        'address'=>$address,
        'hobbies'=>$hobbies,
        'is_married'=>$is_married,
        'schools'=>$school,
        'skills'=>$skills
    ];
    return json_encode($data);
    }

// Biodata
    $name = 'Aldiansyah Wijaya';
    $address = 'Medan';
    $hobbies = ['Ngoding','Membaca buku','Nonton Anime'];
    $is_married = false;
    $schools = [
        'highSchool' => 'SMK Telkom Medan',
        'university' => 'Telkom University'
    ];
    $skills = [
    'ngoding'=> ['PHP','Javascript-basic','CSS'],                                                                                                                                                        
    'design'=>['Illustrator','Photoshop','UI Design'],
    'lainnya' => ['masak','ux']
    ];

echo biodata($name,$address,$hobbies,$is_married,$schools,$skills);

?>