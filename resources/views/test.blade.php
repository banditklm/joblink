$table->id();
            $table->unsignedBigInteger('rec_id');
            $table->unsignedBigInteger('adr_id');
            $table->string('description')->nullable();
            $table->date('debut')->nullable();
            $table->date('fin')->nullable();
            $table->string('path')->nullable();
            $table->string('categorie')->nullable();
            $table->string('domaine')->nullable();
            $table->foreign('rec_id')->references('id')->on('recruteurs');
            $table->foreign('adr_id')->references('id')->on('adresses');
            $table->timestamps();




            