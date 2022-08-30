<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Level;
use App\Models\Branch;
use App\Models\BranchLevel;
use App\Models\BranchLevelSubject;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);



        if(Level::count()==0){
            $levels = [
                ['name'=>'1AS'],
                ['name'=>'2AS'],
                ['name'=>'3AS'],
            ];
            foreach($levels as $level ){
                Level::create($level);
            }
        }


        if (Branch::count()==0){
            $branches = [
                ['name'=>'TCST'],
                ['name'=>'TCL'],
                ['name'=>'SC.EXPERIMENTALES'],
                ['name'=>'LETTRES/PHILO'],
                ['name'=>'LANG-ETRANGERES'],
                ['name'=>'GESTION/ECONOMIE'],
                ['name'=>'MATHEMATIQUES'],
                ['name'=>'TECH-MATH']
            ];
            foreach ($branches as $branch){
                Branch::create($branch);
            }
        }


        if(BranchLevel::count()==0){
            $AS1 = [
                [
                    'level_id'=>1,
                    'branch_id'=>1
                ],
                [
                    'level_id'=>1,
                    'branch_id'=>2
                ],
            ];
            foreach( $AS1 as $branch){
                BranchLevel::create($branch);
            }

            for ($i=2;$i<4;$i++){
                for($j=3;$j<9;$j++){
                    $branch = [
                        'level_id'=>$i,
                        'branch_id'=>$j
                    ];
                    BranchLevel::create($branch);
                }
            }
        }



        if(Subject::count()==0){
            $subjects = [
                ['name'=>'Mathématiques'],
                ['name'=>'Arabe'],
                ['name'=>'Français'],
                ['name'=>'Anglais'],
                ['name'=>'Histoire_et_Géographie'],
                ['name'=>'Education_Islamique'],
                ['name'=>'Physique'],
                ['name'=>'Sciences_Naturelles'],
                ['name'=>'Génie_Civil'],
                ['name'=>'Génie_Mécanique'],
                ['name'=>'Génie_des_Procédés'],
                ['name'=>'Génie_Électrique'],
                ['name'=>'Allemand'],
                ['name'=>'Espagnol'],
                ['name'=>'Italien'],
                ['name'=>'Tamazight'],
                ['name'=>'Philosophie'],
                ['name'=>'Economie_et_Management'],
                ['name'=>'Comptabilité'],
                ['name'=>'Droit'],
                ['name'=>'Dessin'],
                ['name'=>'Technologie'],
                ['name'=>'Informatique']
            ];
            foreach($subjects as $subject){
                Subject::create($subject);
            }
        }

        $specialSubjects = [
            [7,8,22,23],
            [7,8,23],
            [7,8],
            [17],
            [13,14,15],
            [18,19,20],
            [7,8],
            [7,8,9,10,11,12],
        ];

        if (BranchLevelSubject::count()==0){
            $branchLevelSubjects = [
                ['level_id'=>1, 'branch_id'=>1],
                ['level_id'=>1, 'branch_id'=>2],
            ];
            foreach($branchLevelSubjects as $item){
                for ($i=1;$i<7;$i++){
                    $item['subject_id']=$i;
                    BranchLevelSubject::create($item);
                }
                foreach ($specialSubjects[$item['branch_id']-1] as $subject){
                    $item['subject_id'] = $subject;
                    BranchLevelSubject::create($item);
                }

            }

            for ($i=2;$i<4;$i++){
                for($j=3;$j<9;$j++){
                    $branch = [
                        'level_id'=>$i,
                        'branch_id'=>$j
                    ];
                    for ($k=1;$k<7;$k++){
                        $branch['subject_id'] = $k;
                        BranchLevelSubject::create($branch);
                    }

                    foreach($specialSubjects[$branch['branch_id']-1] as $subject){
                        $branch['subject_id'] = $subject;
                        BranchLevelSubject::create($branch);
                    }
                }
            }




        }





    }
}
