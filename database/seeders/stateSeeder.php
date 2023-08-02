<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class stateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stateData = [
            ['code' => 'AL', 'state' => 'Alabama (AL)'],
            ['code' => 'AK', 'state' => 'Alaska (AK)'],
            ['code' => 'AZ', 'state' => 'Arizona (AZ)'],
            ['code' => 'AR', 'state' => 'Arkansas (AR)'],
            ['code' => 'CA', 'state' => 'California (CA)'],
            ['code' => 'CO', 'state' => 'Colorado (CO)'],
            ['code' => 'CT', 'state' => 'Connecticut (CT)'],
            ['code' => 'DE', 'state' => 'Delaware (DE)'],
            ['code' => 'DC', 'state' => 'District Of Columbia (DC)'],
            ['code' => 'FL', 'state' => 'Florida (FL)'],
            ['code' => 'GA', 'state' => 'Georgia (GA)'],
            ['code' => 'HI', 'state' => 'Hawaii (HI)'],
            ['code' => 'ID', 'state' => 'Idaho (ID)'],
            ['code' => 'IL', 'state' => 'Illinois (IL)'],
            ['code' => 'IN', 'state' => 'Indiana (IN)'],
            ['code' => 'IA', 'state' => 'Iowa (IA)'],
            ['code' => 'KS', 'state' => 'Kansas (KS)'],
            ['code' => 'KY', 'state' => 'Kentucky (KY)'],
            ['code' => 'LA', 'state' => 'Louisiana (LA)'],
            ['code' => 'ME', 'state' => 'Maine (ME)'],
            ['code' => 'MD', 'state' => 'Maryland (MD)'],
            ['code' => 'MA', 'state' => 'Massachusetts (MA)'],
            ['code' => 'MI', 'state' => 'Michigan (MI)'],
            ['code' => 'MN', 'state' => 'Minnesota (MN)'],
            ['code' => 'MS', 'state' => 'Mississippi (MS)'],
            ['code' => 'MO', 'state' => 'Missouri (MO)'],
            ['code' => 'MT', 'state' => 'Montana (MT)'],
            ['code' => 'NE', 'state' => 'Nebraska (NE)'],
            ['code' => 'NV', 'state' => 'Nevada (NV)'],
            ['code' => 'NH', 'state' => 'New Hampshire (NH)'],
            ['code' => 'NJ', 'state' => 'New Jersey (NJ)'],
            ['code' => 'NM', 'state' => 'New Mexico (NM)'],
            ['code' => 'NY', 'state' => 'New York (NY)'],
            ['code' => 'NC', 'state' => 'North Carolina (NC)'],
            ['code' => 'ND', 'state' => 'North Dakota (ND)'],
            ['code' => 'OH', 'state' => 'Ohio (OH)'],
            ['code' => 'OK', 'state' => 'Oklahoma (OK)'],
            ['code' => 'OR', 'state' => 'Oregon (OR)'],
            ['code' => 'PA', 'state' => 'Pennsylvania (PA)'],
            ['code' => 'RI', 'state' => 'Rhode Island (RI)'],
            ['code' => 'SC', 'state' => 'South Carolina (SC)'],
            ['code' => 'SD', 'state' => 'South Dakota (SD)'],
            ['code' => 'TN', 'state' => 'Tennessee (TN)'],
            ['code' => 'TX', 'state' => 'Texas (TX)'],
            ['code' => 'UT', 'state' => 'Utah (UT)'],
            ['code' => 'VT', 'state' => 'Vermont'],
            ['code' => 'VA', 'state' => 'Virginia'],
            ['code' => 'WA', 'state' => 'Washington'],
            ['code' => 'WV', 'state' => 'West Virginia'],
            ['code' => 'WI', 'state' => 'Wisconsin'],
            ['code' => 'WY', 'state' => 'Wyoming'],
            // Add more states here...
        ];

        foreach ($stateData as $data) {
            State::create($data);
        }
    }
}
