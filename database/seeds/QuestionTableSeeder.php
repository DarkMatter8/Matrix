<?php

use Illuminate\Database\Seeder;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            'question' => 'Which of the following is not a colligative property?',
            'option1' => 'Depression in freezing point',
            'option2' => 'Elevation in boiling point',
            'option3' => 'Osmotic pressure',
            'option4' => 'Lowering in vapour pressure',
            'answer' => 'D',
            'genre' => 'Chemistry',
        ]);

        DB::table('questions')->insert([
            'question' => 'Molal freezing point depression constant for water is 18.6 Kmol/100g. It can also be written as:',
            'option1' => '186 Km -1',
            'option2' => '1.86 Kmol per 10g',
            'option3' => '1.86 Km -1',
            'option4' => '18.6 Km -1',
            'answer' => 'C',
            'genre' => 'Chemistry',
        ]);

        DB::table('questions')->insert([
            'question' => 'Van’t Hoff factor,(i) can be expressed as:-',
            'option1' => 'The ratio of freezing point lowering for electrolyte to that of a non-electrolyte',
            'option2' => 'The ratio of freezing point lowering for non-electrolyte to that of an electrolyte',
            'option3' => 'The no. of ions produced by the dissolved electrolyte',
            'option4' => 'A constant for all electrolyte dissolved in a particular solvent',
            'answer' => 'A',
            'genre' => 'Chemistry',
        ]);

        DB::table('questions')->insert([
            'question' => '1 amu is ___________',
            'option1' => 'Mass equal to 1/12 of C 12',
            'option2' => '1.008 of H 1',
            'option3' => '35.5 of Chlorine',
            'option4' => 'All of the above',
            'answer' => 'D',
            'genre' => 'Chemistry',
        ]);

        DB::table('questions')->insert([
            'question' => 'The value of gram atomic mass of an atom is calculated as :',
            'option1' => 'Mass in grams/gram atomic mass',
            'option2' => 'No. of gram atoms × gram atomic mass',
            'option3' => 'Mass in grams/No. of gram atoms',
            'option4' => 'None',
            'answer' => 'C',
            'genre' => 'Chemistry',
        ]);

        DB::table('questions')->insert([
            'question' => 'The actual mass of one hydrogen atom is ____________',
            'option1' => '1.67 × 10 -24 g',
            'option2' => '1 g',
            'option3' => '1.008 g',
            'option4' => '2 g',
            'answer' => 'A',
            'genre' => 'Chemistry',
        ]);

        DB::table('questions')->insert([
            'question' => 'The film of a soap bubble has a',
            'option1' => 'Small thickness and there is no air inside and outside the film',
            'option2' => 'Small thickness and there is air both inside and outside the film',
            'option3' => 'Small thickness and there is air only outside the film',
            'option4' => 'Large thickness and there is air only in the film',
            'answer' => 'B',
            'genre' => 'Chemistry',
        ]);

        DB::table('questions')->insert([
            'question' => '2NH 3 → N 2(g) + 3H 2(g) .Which of the following is correct?',
            'option1' => 'ΔH = ΔE',
            'option2' => 'ΔH > ΔE',
            'option3' => 'ΔH ≥ ΔE',
            'option4' => 'ΔH = 0',
            'answer' => 'B',
            'genre' => 'Chemistry',
        ]);

        DB::table('questions')->insert([
            'question' => 'Which of the following dimensions represents triclinic unit cell?',
            'option1' => 'a=b=c ; α=β=γ=90',
            'option2' => 'a=b≠c ; α=β=γ=90',
            'option3' => 'a≠b≠c ; α=β=90=γ',
            'option4' => 'a≠b≠c ; α≠β≠γ=90',
            'answer' => 'D',
            'genre' => 'Chemistry',
        ]);

        DB::table('questions')->insert([
            'question' => 'For which experiment did Albert Einstein get his nobel prize for?',
            'option1' => 'E=mc^2',
            'option2' => 'photoelectric ffect',
            'option3' => 'principle used in atomic bomb',
            'option4' => 'none of the above',
            'answer' => 'B',
            'genre' => 'Physics',
        ]);

        DB::table('questions')->insert([
            'question' => 'Marie Curie received her nobel prize for which 2 subjects?',
            'option1' => 'physics,chemistry',
            'option2' => 'physics ,physics',
            'option3' => 'physics,maths',
            'option4' => 'chemistry,chemistry',
            'answer' => 'A',
            'genre' => 'Physics',
        ]);
        
        DB::table('questions')->insert([
            'question' => 'The kinetic energy of a proton is equal to the energy E of a photon .If w1 be the de-Broglie wavelength of proton and w2 that of photon then the ratio w1/w2 is proportional to',
            'option1' => 'E',
            'option2' => 'E^(1/2)',
            'option3' => 'E^(-1/2)',
            'option4' => 'E^(-1)',
            'answer' => 'B',
            'genre' => 'Physics',
        ]);
        
        DB::table('questions')->insert([
            'question' => 'The molecules of a gas exert force on the walls of the containing vessel because',
            'option1' => 'they are loosing their kinetic energy',
            'option2' => 'they are sticking with the walls',
            'option3' => 'their momentum is changing due to their collision with the walls',
            'option4' => 'they are accelerating towards the walls',
            'answer' => 'C',
            'genre' => 'Physics',
        ]);
        
        DB::table('questions')->insert([
            'question' => 'Ordinary light falling at polarizing incidence on a glass slab placed in air is partly reflected in air and partly refracted in the slab. then',
            'option1' => 'reflected light is completely polarized',
            'option2' => 'reflected light is partially polarized',
            'option3' => 'refracted light is completely polarized',
            'option4' => 'none of the above',
            'answer' => 'A',
            'genre' => 'Physics',
        ]);
        
        DB::table('questions')->insert([
            'question' => 'If W1,W2 and W3 are the works done in moving a particle from the position Ato B along three different paths 1,2,3 respectively(as shown) in the gravitational field of a point mass m,then the correct relation between W1,W2,W3 is given by',
            'option1' => 'W1>W2>W3',
            'option2' => 'W1=W2=W3',
            'option3' => 'W1<W2<W3',
            'option4' => 'W2>W1>W3',
            'answer' => 'B',
            'genre' => 'Physics',
        ]);
        
        DB::table('questions')->insert([
            'question' => 'A charged particle moves through a magnetic field perpendicular to its direction.Then',
            'option1' => 'both the momentum and kinetic energy of the particle are not constant',
            'option2' => 'both momentum and KE of the particle are constant',
            'option3' => 'KE changes but the momentum is constant',
            'option4' => 'the momentum changes but the KE is constant',
            'answer' => 'D',
            'genre' => 'Physics',
        ]);
        
        DB::table('questions')->insert([
            'question' => 'As the mass number of a nucleus increases, the binding energy per nucleon',
            'option1' => 'goes on increasing',
            'option2' => 'goes on decreasing',
            'option3' => 'remains same',
            'option4' => 'first increases and then decreases',
            'answer' => 'D',
            'genre' => 'Physics',
        ]);
        
        DB::table('questions')->insert([
            'question' => 'Choose the wrong statement from the following',
            'option1' => 'surface tension is a molecular phenomena',
            'option2' => 'tiny drops of liquid are spherical due to surface tension',
            'option3' => 'oil rises in the wick due to capillarity',
            'option4' => 'cold drink rises in the straw due to capillarity',
            'answer' => 'D',
            'genre' => 'Physics',
        ]);
        
        DB::table('questions')->insert([
            'question' => 'A real gas behaves like an ideal gas if its',
            'option1' => 'pressure and temperature both high',
            'option2' => 'pressure and temperature both low',
            'option3' => 'pressure is high and temperature is low',
            'option4' => 'pressure is low and temperature is high',
            'answer' => 'D',
            'genre' => 'Physics',
        ]);
        
        
    }
}
