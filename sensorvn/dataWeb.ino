/*
* Date : 20/09/2020 19:05:10
* Author: lxkhanh@bigclass.io
* Organization: BigClass JSC
* License: MIT
*/
#include <ESP8266WiFi.h>asd
#include <ESP8266WiFiMulti.h>
#include <ESP8266HTTPClient.h>
#include <WiFiClient.h>
/* variable */
ESP8266WiFiMulti WiFiMulti;
int i = 0;

/* function */
void sendData(int data)
{
  if ((WiFiMulti.run() == WL_CONNECTED)) 
  {
    WiFiClient client;
    HTTPClient http;
    String link = "http://192.168.4.103/sensorvn/php/get.php?value=";//sua link theo pc cua ban
    String _data = String(data);
    http.begin(client,link + _data);
    http.GET();
  } 
}

/* CODE */
void setup() 
{
  WiFi.mode(WIFI_STA);
  WiFiMulti.addAP("bigclass.io", "@bigclass.io");//tk vs pass wifi
}

void loop() 
{
  sendData(i);
  i++;
  delay(10000);
}