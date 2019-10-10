// TRY  CATCH:   https://www.tutorialspoint.com/javascript/javascript_error_handling.htm



// pvz:

console.log(   "Labas"  );

    // duomenu pvz:
   // var perkamuPrekiuKiekis = "";
   // var perkamuPrekiuKiekis = "Tomas";
   // var perkamuPrekiuKiekis = 1;
   var perkamuPrekiuKiekis = 20;
   try {
        if(perkamuPrekiuKiekis == "") throw "empty";
        if(isNaN(perkamuPrekiuKiekis)) throw "not a number";

        // paverciam i skaiciu
        perkamuPrekiuKiekis = Number(perkamuPrekiuKiekis);
        if(perkamuPrekiuKiekis < 0) throw "too low";
        if(perkamuPrekiuKiekis > 100) throw "too high";
   }
   catch ( klaida ) {
       console.log("Klaida: " + klaida );
   }
   finally {
       console.log("nesvarbu kas  - as visada suveiksiu");
   }

//
