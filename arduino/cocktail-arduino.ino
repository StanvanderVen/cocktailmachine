String DrinkCode;   // for incoming serial data
int timeA;
int timeB;
int timeC;
int timeD;
int timeE;
int timeF;
int timeG;


void setup() {
        Serial.begin(115200);     // opens serial port, sets data rate to 9600 bps
        pinMode(13, OUTPUT);
}



void loop() {
   if (Serial.available() > 0) {
      DrinkCode = Serial.readStringUntil(';'); // read the incoming byte:
      Serial.readString();  //clears the remaining serial buffer
      //Serial.print(DrinkCode); //Sends a return to Rpi
      if (DrinkCode == "h") {
        digitalWrite(13, HIGH);
      };
      if (DrinkCode == "o") {
        digitalWrite(13, LOW);
      };
      
      
      int i = 0;
      switch (DrinkCode[i]) {
      case 'A':
          timeA = (DrinkCode[i+1]-48)*10 + DrinkCode[i+2]-48;
        break;
      case 'B':
          timeB = (DrinkCode[i+1]-48)*10 + DrinkCode[i+2]-48;
        break;
      case 'C':
          timeC = (DrinkCode[i+1]-48)*10 + DrinkCode[i+2]-48;
        break;
      case 'D':
          timeD = (DrinkCode[i+1]-48)*10 + DrinkCode[i+2]-48;
        break;
      case 'E':
          timeE = (DrinkCode[i+1]-48)*10 + DrinkCode[i+2]-48;
        break;
      case 'F':
          timeF = (DrinkCode[i+1]-48)*10 + DrinkCode[i+2]-48;
        break;
      case 'G':
          timeG = (DrinkCode[i+1]-48)*10 + DrinkCode[i+2]-48;
        break;
      };
  };
}

 



