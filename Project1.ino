#include <ESP32_Servo.h>
#define SERVO_PIN 12

int count = 0;

#define IR_SENSOR_PIN1 33
#define IR_SENSOR_PIN2 27
#define IR_SENSOR_PIN3 15
#define IR_SENSOR_PIN4 32

// Define the servo positions
int SERVO_OPEN_POSITION = 0;
int SERVO_CLOSED_POSITION = 90;

// Create a servo object
Servo servo;

// Create an array to store the IR sensor values
int irSensorValues[4];


void setup() {
  //Initialize serial and wait for port to open:
  Serial.begin(9600);
  while (!Serial) {
    ; // wait for serial port to connect. Needed for native USB port only
  }

  pinMode(SERVO_PIN, OUTPUT);

  servo.attach(SERVO_PIN);
  pinMode(IR_SENSOR_PIN1, INPUT);
  pinMode(IR_SENSOR_PIN2, INPUT);
  pinMode(IR_SENSOR_PIN3, INPUT);
  pinMode(IR_SENSOR_PIN4, INPUT);

  servo.write(SERVO_OPEN_POSITION);

}

void loop() {

  irSensorValues[0] = digitalRead(IR_SENSOR_PIN1);
  irSensorValues[1] = digitalRead(IR_SENSOR_PIN2);
  irSensorValues[2] = digitalRead(IR_SENSOR_PIN3);
  irSensorValues[3] = digitalRead(IR_SENSOR_PIN4);

  int irSensorValue = digitalRead(IR_SENSOR_PIN1);

  if (irSensorValue == LOW) {
    // Car is detected, open the servo
    servo.write(SERVO_OPEN_POSITION);
    Serial.println("Car detected - Servo OPEN");
  } else {
    // No car detected, close the servo
    servo.write(SERVO_CLOSED_POSITION);
    Serial.println("No car detected - Servo CLOSED");
  }
  bool carPresent = false;
  if (irSensorValues[0] == HIGH) {
    carPresent = true;
  }
  if (carPresent) {
    for (int i = 1; i < 4; i++) {
      Serial.print(irSensorValues[i]);
    }
    delay(5000);
    Serial.println();
  } else {
    for (int i = 1; i < 4; i++) {
      Serial.print(irSensorValues[i]);
    }
    delay(5000);
    Serial.println();
  }

  delay(3000);
}
