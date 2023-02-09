# Attendance-Management-System


The aim of this project is to automate the process of the management of attendance during lectures in Moroccan universities by implementing a connected pointer machine in each classroom dedicated to control access authorizations and to track student's attendance using RFID technology.

It is an automatic pointing system to record the codes of cards validated by students and stores validation dates in a MySQL database via PHP API. The system has a website that allows teachers to view the information about each student in the class and to monitor their presence via a website, which is the core functionality of the project; thus offers to the users the possibility of making modifications (change students' information).

It is mandatory for students to validate their cards at the means of the object as they enter the classroom for the system to be more effective.

## Components
To create this pointer machine we will need to use a set of components, the most important ones are the two electronic cards that we will be using the radio frequency identification card (RFID) and the Wifi module node mcu esp8266 to connect to the server and to send data to the database through Wifi.

### RFID
RFID (Radio Frequency Identification) is one of the automatic identification technologies that allow to identify an object or a person and to know its features remotely through a tag that emits radio waves. 
These objects are equipped with a chip containing the information and an antenna to allow the exchange of information.

<img src="https://user-images.githubusercontent.com/58095725/217862140-92b3ea51-a2b6-4d53-813e-d548c5d2baa2.png" width="300" height="300">

The reader/recorder consists of a circuit that emits energy electromagnetic through an antenna, and electronics that receives and decodes the information sent by the tag and sends it to the collection of data. The RFID reader is the element responsible for reading the radio frequency tags and the transmission of the information they contain.

<img src="https://user-images.githubusercontent.com/58095725/217863105-227cf4f6-4da1-4c63-93a5-d35b2f872766.png" width="600" height="300">

There are two types of RFID tags, passive tags that are not equipped with a power source while active tags are equipped with a battery that lasts approximately 5 years.

### ESP8266 Nodemcu v1.0
NodeMCU is an open-source LUA-based firmware developed for the ESP8266 wifi chip. Exploring functionality with ESP8266 chip, NodeMCU firmware comes with ESP8266 development board/kit, i.e. NodeMCU development board.

Simple ESP8266 can only be used to connect other microcontrollers like Arduino to the internet with its built-in WiFi chip. But with the NodeMCU development kit, this hardware module can use its GPIO pins to connect to other devices without the help of another microcontroller. The Nodemcu card is required to be able to connect it with serial devices like I2C compatible LCD that we will be using to display authorization messages to users.

You can distinguish the Nodemcu v1.0 from the v0.9 using the below picture:

<img src="https://user-images.githubusercontent.com/58095725/217876600-48edb331-9106-4d6a-8f26-33f2296694a7.png" width="500" height="300">

#### NodeMCU Components
1. **ESP8266:** It is the main chip with built-in wifi.
2. **USB to UART converter:** This chip will convert USB data into UART data that the main chip can understand.
3. **Voltage regulators**
4. **Status LED:** This LED is basically used to show current status like flashing/starting.
5. **Micro USB port:** Connect the board to the computer to program and power the board.
6. **Reset / Flash Buttons:** Perform onboard actions.
7. **GPIO / Digital pins:** To connect the board to other devices.

#### NodeMCU/ESP8266 ports:
Input/output (GPIO) is a pin on an integrated circuit (IC). It can be an input pin or an output pin, the behavior of which can be controlled at runtime.
The NodeMCU development kit provides access to these ESP8266 GPIOs. The only thing to be aware of is that the NodeMCU Dev Kit pins are numbered differently from the internal GPIO notations of the ESP8266 as shown in the figure. For example, pin D0 of the NodeMCU Dev Kit is mapped to internal GPIO pin 16 of the ESP8266.

<img src="https://user-images.githubusercontent.com/58095725/217878314-8c93816f-1972-42a6-bb6e-00c1a3a97f88.png" width="450" height="300">

### I2C LCD
The I2C LCD is the module responsible for displaying messages coming from the microcontrollers. It's wiring is very simple, we just need to wire the SDA and SCL pins.

<img src="https://user-images.githubusercontent.com/58095725/217879480-4e85dc90-025c-48c4-a5dd-a9468cff83e7.jpg" width="400" height="370">

Moreover, it is equipped with a built-in potentiometer that is used to adjust the contrast between the background and the characters on the LCD unlike in a regular LCD where we must add a potentiometer to the circuit to adjust the contrast.

<img src="https://user-images.githubusercontent.com/58095725/217880114-34c86009-7018-4118-82c3-8de824d8139e.png" width="400" height="200">

### Blinking Leds
We will need also two Blinking Leds, a green one to react to access granted situations and a red one to react to a denied access. Usually, the leds have one leg that is longer than the other to help us distinguish which leg should be wired with the GND (ground) port for power supply and the leg to be wired with the digital port of the NodeMCU.

<img src="https://user-images.githubusercontent.com/58095725/217880439-6cf98467-fe71-4aca-9af2-d88087cad1ad.png" width="350" height="300">

### Bread bord
A breadboard or prototyping board is a device that allows you to prototype an electronic circuit and test it. The advantage of this system is to be completely reusable, because it does not require welding. This last point distinguishes breadboards from veroboards, perfboards or printed circuits which are themselves used to make permanent prototypes and which we will therefore be less able to disassemble. In addition, a wide variety of components can be wired to a breadboard in order to create electronic circuits, from the simplest circuit to a microprocessor.

<img src="https://user-images.githubusercontent.com/58095725/209869934-a790a35c-ec21-43d7-bb80-1f0782a4017d.png" width="400" height="300">


## Implementation
We will link the components together based on the following wiring table:

| NodeMcu  | RFID |
| -------- | ----|
| D4  | SDA  |
| D5  | SCK  |
| D6  | MISO |
| D7  | MOSI |
| GND | GND  |
| RST | RST  |
| 3V3 | 3.3V |

| NodeMcu  | I2C LCD |
| ----- | -------|
| GND | GND |
| VCC | VCC |
| D2  | SDA |
| D1  | SCL |

| NodeMcu  | GREEN LED |
| ------- | ------|
| GND | Short LEG |
| D3  | Long LEG  |

| NodeMcu  | RED LED |
| ------- | ------|
| GND | Short LEG |
| D0  | Long LEG  |

The image below shows the architecture of the system and the connection of all the components together:
[System Wiring](schema.jpg)


## Environment Setup

In order to execute the Arduino code, we need first to install the Arduino IDE that will allow us to transfer code to the microcontroller of our ship. 
[Download Arduino IDE](https://www.arduino.cc/en/software)

#### Nodemcu Configuration
After we install the Arduino IDE, we will need to configure it in order to detect the Nodemcu. 
Go to File -> Preferences -> in "Additional boards manager URLs" paste the following link:

```bash
 http://arduino.esp8266.com/stable/package_esp8266com_index.json
```

Now go to Tools -> Manage libraries -> type esp8266 and install the esp8266 package.

<img src="https://user-images.githubusercontent.com/58095725/217882179-f2e1026b-8301-43fc-9647-877f6cc5ddf9.png" width="600" height="200">

Plug your machine to the Nodemcu, then go to Select Board in the top left choose the Nodemcu v1.0 and Port.

Go to Tools -> Boards -> esp8266 and select nodemcu v1.0.

The Nodemcu is ready to be programmed.

#### RFID Configuration
The RFID setup is more simple, just download the MFRC522 library and you're good to go.

<img src="https://user-images.githubusercontent.com/58095725/217882804-30a2153e-9368-4dcc-a75e-11207e8fbb5c.png" width="300" height="150">

Scan the card next to the RFID ship then the code of the card will be dispaled in the Serial Monitor in Tools -> Serial Monitor; store the displayed code in the byte id variable (line 28 of the [Arduino Code](https://github.com/Ghazoui-Badr-Eddine/Attendance-Management-System/blob/e0a9b95bc8e629f52fc6522514ce55ebc15a48e1/Arduino%20Code/Arduino%20Code.ino)).

#### I2C LCD Configuration
Again, in the library Manager, download the I2C LCD library by Frank de Brabander as shown below.

<img src="https://user-images.githubusercontent.com/58095725/217883635-63cd21a3-401d-435d-9c34-c9e78f9cb88a.png" width="300" height="180">


Use the [I2C Address](https://github.com/Ghazoui-Badr-Eddine/Attendance-Management-System/blob/e0a9b95bc8e629f52fc6522514ce55ebc15a48e1/I2C%20Address/I2C%20Address.ino) in order to find the address of your I2C LCD, once the address is displayed in the Serial Monitor copy it and paste in the I2c Address value in line 39 of the [Arduino Code](https://github.com/Ghazoui-Badr-Eddine/Attendance-Management-System/blob/e0a9b95bc8e629f52fc6522514ce55ebc15a48e1/Arduino%20Code/Arduino%20Code.ino).

## Code

We need to install the Arduino software in order to use the code and to transfer it to the Nodemcu's microcontroller.

[System code](https://github.com/Ghazoui-Badr-Eddine/Attendance-Management-System/blob/e0a9b95bc8e629f52fc6522514ce55ebc15a48e1/Arduino%20Code/Arduino%20Code.ino)

Transfer the code to the Nodemcu, while the code is being compiled go to Tools -> Serial Monitor once the window appears, change baud rate to 115200 and you'll see our printed messages displayed as the ESP8266 is connecting to the WIFI network, you'll also be able to see the messages via the I2C LCD.

The code of the validated card will be sent to the MySQL database through WIFI via the rfid_read PHP code.

Use the website code to view all students' information, to perform CRUD operations and to view the validation history of students' cards to monitor their presence.

## Demo

https://user-images.githubusercontent.com/58095725/217917673-e55bfe46-df89-4f8d-971a-e7542fe16374.mp4

## Troubleshooting

- If the I2C LCD display is dark meaning there's no light in the LCD, make sure that you plugged the LED ports of the potentiometer to each other.
- It is mandatory to plug the SDA and SCL ports of the I2C LCD respectively with the D2,D1 ports of the nodemcu, because the I2C uses these ports by default.
- It is mandatory to use the correct address in order for the I2C LCD to display the messages, run the [I2C Address](https://github.com/Ghazoui-Badr-Eddine/Attendance-Management-System/blob/e0a9b95bc8e629f52fc6522514ce55ebc15a48e1/I2C%20Address/I2C%20Address.ino) first to find it.
- If your Serial Monitor is showing weird messages and symbols, please make sure that you are using the correct baud rate which is 115200.
- Read the cards' code and place in the byte id variable.
- If the RFID card validation codes and dates are not transferred to your database it means that your server is not allowing the esp8266 to post and get data from the server, you need to cope the IP address of your esp8266 from the Serial Monitor or when it displays on the LCD as it starts then go to the httpd.conf file of your server -> under *Controls who can get stuff from this server.* add this line *Allow from YourIPAddress* by changing  YourIPAddress value with the nodemcu IP address. We advise to use [wamp server 2.0](https://sourceforge.net/projects/wampserver/files/WampServer%202/WampServer%202.0/) to avoid this issue. 
- Make sure to plug the shortest LEG of the red and green LED with GND ports of the nodemcu.


