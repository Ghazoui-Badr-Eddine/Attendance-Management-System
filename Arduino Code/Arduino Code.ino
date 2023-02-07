#include<SoftwareSerial.h>

#include <ESP8266WiFi.h>
#include <WiFiClient.h>
#include <ESP8266WebServer.h>
#include <ESP8266mDNS.h>
#include <SPI.h>
#include <MFRC522.h>
#include <LiquidCrystal_I2C.h>

const char* ssid = "Wifi Name";// Change this value with the name of your Wifi Network
const char* password = "Password"; // Change this value with your Wifi Password


char server[] = "IP Address";   // Change this value with your machine's IP ADDRESS, eg: 192.168.1.50
#define SS_PIN D4 //FOR RFID SS PIN BECASUSE WE ARE USING BOTH ETHERNET SHIELD AND RS-522
#define RST_PIN D8
#define No_Of_Card 3
#define LED_PIN D3
#define LED_CIN D0

WiFiClient client; // start a Wifi Client

//WiFiServer server(80);
SoftwareSerial mySerial(8,9);     
MFRC522 rfid(SS_PIN,RST_PIN);
MFRC522::MIFARE_Key key; 
byte id[No_Of_Card][4]={
  {224,43,39,27},             //RFID card NO-1          
  {188,32,7,133}              //RFID card NO-2
};
byte id_temp[3][3];
byte i;
int j=0;

int lcdColumns = 16; // I2C display coordinates
int lcdRows = 2; // I2C display coordinates

LiquidCrystal_I2C lcd(0x3F, lcdColumns, lcdRows);  // Start an LCD Object

void setup()
{
  lcd.init();
  // turn on LCD backlight                      
  lcd.backlight();

  Serial.begin(115200);
  delay(10);
  mySerial.begin(115200);
  SPI.begin();
  rfid.PCD_Init();
  pinMode(LED_PIN,OUTPUT);
  pinMode(LED_CIN,OUTPUT);
    for(byte i=0;i<6;i++)
  {
    key.keyByte[i]=0xFF;
  }

  // Connect to WiFi network / Display Connection messages
  Serial.println();
  Serial.println();
  lcd.setCursor(0, 0);
  lcd.print("Connecting to :");
  delay(1000);
  lcd.setCursor(0, 1);
  lcd.print(ssid);
  delay(1000);
  lcd.clear();

  Serial.print("Connecting to ");
  Serial.println(ssid);
  WiFi.begin(ssid, password);
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }
  Serial.println("");
  Serial.println("WiFi connected");
  lcd.println("WiFi connected");
  delay(1000);
  lcd.clear();
 
  lcd.setCursor(0, 0);
  lcd.print("Server started");
  delay(1000);
  lcd.setCursor(0, 1);
  lcd.print(WiFi.localIP());
  delay(1000);
  
  
  lcd.clear();
  lcd.setCursor(0, 0);
  lcd.print("Connecting...");
  lcd.setCursor(0, 0);
  Serial.println("Server started");
  Serial.print(WiFi.localIP());
  delay(1000);
  Serial.println("Connecting...");
      
  lcd.print("Validate card");

 }


void loop()
{  
  int m=0;
  if(!rfid.PICC_IsNewCardPresent())
  return;
  if(!rfid.PICC_ReadCardSerial())
  return;
  for(i=0;i<4;i++)
  {
   id_temp[0][i]=rfid.uid.uidByte[i]; 
             delay(50);
  }
  
   for(i=0;i<No_Of_Card;i++)
  {
          if(id[i][0]==id_temp[0][0])
          {
            if(id[i][1]==id_temp[0][1])
            {
              if(id[i][2]==id_temp[0][2])
              {
                if(id[i][3]==id_temp[0][3])
                {
                  Serial.print("your card no :");
                  for(int s=0;s<4;s++)
                  {
                    Serial.print(rfid.uid.uidByte[s]);
                    Serial.print(" ");
                   
                  }
                  
                  Serial.println("\nVALID");
                  digitalWrite(LED_PIN,HIGH);
                  delay(400);
                  digitalWrite(LED_PIN,LOW);
                  Sending_To_DB();
                  j=0;
                            
                  rfid.PICC_HaltA(); 
                  rfid.PCD_StopCrypto1(); 

                  lcd.setCursor(0, 0);
                  // print message
                  lcd.print("Access granted");
                  delay(1000);
                  lcd.clear();
                  delay(1000);
                  lcd.print("Validate card");
                   
                  return;                             
                }
              }
            }
          }
   else
   {j++;
    if(j==No_Of_Card)
    {
       Serial.print("your card no :");
                  for(int s=0;s<4;s++)
                  {
                    Serial.print(rfid.uid.uidByte[s]);
                    Serial.print(" ");
                   
                  }

      Serial.println("\ninVALID");
      digitalWrite(LED_CIN,HIGH);
      delay(400);
      digitalWrite(LED_CIN,LOW);
      Sending_To_DB();
      j=0;


      lcd.setCursor(0, 0);
      // print message
      lcd.print("Access denied");
      delay(1000);
      lcd.clear(); 
      delay(1000);
      lcd.print("Validate card");
      
    }
   }
  }
     // Halt PICC
  rfid.PICC_HaltA();

  // Stop encryption on PCD
  rfid.PCD_StopCrypto1();
 }

 void Sending_To_DB()   //CONNECTING WITH MYSQL
 {
   if (client.connect(server, 80)) { // change 80 by the port of your server , if your port is 80 no need to change it
    Serial.println("connected");

    // Make a HTTP request:
    Serial.println("GET /rfid/rfid_read.php?allow=");     //  /rfid/rfid_read.php?allow
    client.print("GET /rfid/nodemcu_rfid/rfid_read.php?allow=");     //YOUR RFID API PATH URL    /rfid/rfid_read.php?allow  eg:/www/rfid/nodemcu_rfid/rfid_read.php
    if(j!=No_Of_Card)
    {
      Serial.println('1');
      client.print('1');
    }
    else
    {
      Serial.println('0');
      client.print('0');
    }
    Serial.println("&id=");
    client.print("&id=");
    for(int s=0;s<4;s++)
                  {
                    Serial.println(rfid.uid.uidByte[s]);
                    client.print(rfid.uid.uidByte[s]);
                                  
                  }
    client.print(" ");      //SPACE BEFORE HTTP/1.1 
    client.print("HTTP/1.1");
    client.print("Host: ");
    client.println(server);
    client.println("Host: IP Address");// Change this value with your machine's IP ADDRESS, eg: 192.168.1.50
    client.println("Connection: close");
    client.println();
  } else {
    // if you didn't get a connection to the server:
    Serial.println("connection failed");
  }
  
  client.stop();
 }
