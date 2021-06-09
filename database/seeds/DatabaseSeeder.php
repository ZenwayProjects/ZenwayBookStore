<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'title' => 'Meditations',
            'description' => 'Meditations	The Meditations, Thoughts or Himself of the Roman Emperor Marcus Aurelius is a literary work consisting of a series of reflections by this philosopher, apparently out of time and without chronology. It was originally written in Greek between 170 and 180.',
            'created_at' => now(),
            'updated_at' => now()
      ]);

      DB::table('books')->insert([
            'title' => 'Crito',
            'description' => "The Crito is a short dialogue from Plato's early days, the content of which is very close to the Apology. It narrates an encounter between Crito and Socrates in prison, once the latter's death sentence had been passed. It deals with topics such as the opinion of the majority, Justice and the Law.",
            'created_at' => now(),
            'updated_at' => now()
      ]);

      DB::table('books')->insert([
            'title' => 'Apology for Socrates',
            'description' => 'Apology for Socrates is a work by Plato, which gives a version of the speech that Socrates gave in defense, before the Athenian courts, in the trial in which he was accused of corrupting the youth and of not believing in the gods of the polis .',
            'created_at' => now(),
            'updated_at' => now()
      ]);


      DB::table('books')->insert([
            'title' => 'The Republic',
            'description' => "The Republic —in Greek: Πολιτεία, which comes from πόλις - is Plato's best known and most influential work, and is the compendium of the ideas that make up his philosophy. It is a dialogue between Socrates and other characters, such as the disciples or relatives of Socrates himself.",
            'created_at' => now(),
            'updated_at' => now()
      ]);

      DB::table('books')->insert([
            'title' => 'DeepWork',
            'description' => 'In DEEP WORK, author and professor Cal Newport flips the narrative on impact in a connected age. Instead of arguing distraction is bad, he instead celebrates the power of its opposite.',
            'created_at' => now(),
            'updated_at' => now()
      ]);

      DB::table('books')->insert([
            'title' => 'Atomic Habits',
            'description' => 'ATOMIC HABITS starts from a simple but powerful question: How can we live better? We know that good habits allow us to significantly improve our lives, but we often deviate from the path: we stop exercising, we eat poorly, we sleep little, we waste.',
            'created_at' => now(),
            'updated_at' => now()
      ]);

      DB::table('books')->insert([
        'title' => 'The Prince',
        'description' => 'The Prince is a 16th century political treatise by Italian diplomat and political theorist Nicolas Machiavelli. According to Machiavelli\'s correspondence, one version appears to have been distributed in 1513, using the Latin title De Principatibus.',
        'created_at' => now(),
        'updated_at' => now()
      ]);

      DB::table('books')->insert([
        'title' => 'The Kybalion',
        'description' => 'The Kybalion is a 1908 document that summarizes the teachings of Hermeticism, also known as the Seven Principles of Hermeticism. Its authorship is attributed to an anonymous group of people calling themselves The Three Initiates and, due to its style, it is considered that the author who signed it was William Walker Atkinson.',
        'created_at' => now(),
        'updated_at' => now()
      ]);



    }
}
