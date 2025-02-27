<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use App\Models\AnneFormation;
use App\Models\Apprenant;
use App\Models\ApprenantPreparationBrief;
use App\Models\ApprenantPreparationTache;
use App\Models\Formateur;
use App\Models\Groupes;
use App\Models\GroupesApprenant;
use App\Models\GroupesPreparationBrief;
use App\Models\PreparationBrief;
use App\Models\PreparationTache;

use Database\Factories\AnneFormationFactory;
use Database\Factories\ApprenantFactory;
use Database\Factories\ApprenantPreparationBriefFactory;
use Database\Factories\ApprenantPreparationTacheFactory;
use Database\Factories\FormateurFactory;
use Database\Factories\GroupesFactory;
use Database\Factories\GroupesApprenantFactory;
use Database\Factories\GroupesPreparationBriefFactory;
use Database\Factories\PreparationBriefFactory;
use Database\Factories\PreparationTacheFactory;

                         


class DatabaseSeeder extends Seeder
{
  public function run (){
  
    Formateur::factory(2)->create();
    AnneFormation::factory(2)->create();
    Groupes::factory(2)->create();
    Apprenant::factory(5)->create();
    GroupesApprenant::factory(2)->create();
    PreparationBrief::factory(4)->create();
    PreparationTache::factory(6)->create();
    ApprenantPreparationBrief::factory(4)->create();
    ApprenantPreparationTache::factory(6)->create();
    GroupesPreparationBrief::factory(6)->create();

  }
}
