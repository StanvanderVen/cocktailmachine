String DrinkCode;   // for incoming serial data
int timeA, timeB, timeC, timeD, timeE, timeF, timeG;
int amountIngredients = 0;
int ingredientsAdded = 0;

void setup() {
<<<<<<< HEAD
        Serial.begin(115200);     // opens serial port, sets data rate to 115200 bps
        pinMode(13, OUTPUT);
=======
    Serial.begin(115200);     // opens serial port, sets data rate to 9600 bps
    pinMode(13, OUTPUT);
>>>>>>> origin/master
}

void loop() {
<<<<<<< HEAD
   if (Serial.available() > 0) {
      DrinkCode = Serial.readStringUntil(';'); // read the incoming byte:
      Serial.readString();  //clears the remaining serial buffer after the ';'
      Serial.print("input: ");
      Serial.println(DrinkCode); //Sends a return to Rpi
=======
    if (Serial.available() > 0) {
        DrinkCode = Serial.readStringUntil(';'); // read the incoming byte:
        Serial.readString();  //clears the remaining serial buffer after the ';'

        //Test Code handshake
//      Serial.print(DrinkCode); //Sends a return to Rpi
>>>>>>> origin/master
//      if (DrinkCode == "h") { //used for testing
//          digitalWrite(13, HIGH);
//      }
//      if (DrinkCode == "o") {
//          digitalWrite(13, LOW);
//      }
        
        //checks the amount of ingredients that are used
<<<<<<< HEAD
        
        
        while(ingredientsAdded < amountIngredients) {
          int i = ingredientsAdded;
          Serial.print("The amount of ingredients added");
          Serial.println(amountIngredients);
          switch (DrinkCode[i]) {
            case 'A':
                timeA = (DrinkCode[i+1]-48)*100 + (DrinkCode[i+2]-48)*10 + DrinkCode[i+3]-48;
                Serial.print("Time of drink A");
                Serial.println(timeA);
              break;
            case 'B':
                timeB = (DrinkCode[i+1]-48)*100 + (DrinkCode[i+2]-48)*10 + DrinkCode[i+3]-48;
                Serial.print("Time of drink B");
                Serial.println(timeB);
            break;
            case 'C':
              timeC = (DrinkCode[i+1]-48)*100 + (DrinkCode[i+2]-48)*10 + DrinkCode[i+3]-48;
            break;
            case 'D':
              timeD = (DrinkCode[i+1]-48)*100 + (DrinkCode[i+2]-48)*10 + DrinkCode[i+3]-48;
            break;
            case 'E':
              timeE = (DrinkCode[i+1]-48)*100 + (DrinkCode[i+2]-48)*10 + DrinkCode[i+3]-48;
            break;
            case 'F':
              timeF = (DrinkCode[i+1]-48)*100 + (DrinkCode[i+2]-48)*10 + DrinkCode[i+3]-48;
            break;
            case 'G':
              timeG = (DrinkCode[i+1]-48)*100 + (DrinkCode[i+2]-48)*10 + DrinkCode[i+3]-48;
            break;
          };
=======
        for (int x = 0; x < 10; x++) { //ten ingredients limit
            if (DrinkCode[4*x] == 'A' || 'B' || 'C' || 'D' || 'E' || 'F' || 'G') { 
                amountIngredients++;
            }
>>>>>>> origin/master
        }
                
        while (ingredientsAdded < amountIngredients) {
            int i = ingredientsAdded;
            switch (DrinkCode[i]) {
                case 'A':
                    timeA = (DrinkCode[i+1]-48)*100 + (DrinkCode[i+2]-48)*10 + DrinkCode[i+3]-48;
                    break;
                case 'B':
                    timeB = (DrinkCode[i+1]-48)*100 + (DrinkCode[i+2]-48)*10 + DrinkCode[i+3]-48;
                    break;
                case 'C':
                    timeC = (DrinkCode[i+1]-48)*100 + (DrinkCode[i+2]-48)*10 + DrinkCode[i+3]-48;
                    break;
                case 'D':
                    timeD = (DrinkCode[i+1]-48)*100 + (DrinkCode[i+2]-48)*10 + DrinkCode[i+3]-48;
                    break;
                case 'E':
                    timeE = (DrinkCode[i+1]-48)*100 + (DrinkCode[i+2]-48)*10 + DrinkCode[i+3]-48;
                    break;
                case 'F':
                    timeF = (DrinkCode[i+1]-48)*100 + (DrinkCode[i+2]-48)*10 + DrinkCode[i+3]-48;
                    break;
                case 'G':
                    timeG = (DrinkCode[i+1]-48)*100 + (DrinkCode[i+2]-48)*10 + DrinkCode[i+3]-48;
                    break;
            }
            ingredientsAdded = ingredientsAdded + 3;
        }
    }
}
