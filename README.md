# saycheesapp
For now saycheesapp is an improved copy of [The linux choice](https://github.com/thelinuxchoice/saycheese)
Take webcam shots from target just sending a malicious link .
# BUT 
In the next version the connection interface will allow you to recover passwords entered on the interface .

![cheese](https://user-images.githubusercontent.com/64985848/81445516-4c931780-9179-11ea-9f18-fae56113871c.png)

# How it works?
<p>The tool generates a malicious HTTPS page using Serveo or Ngrok Port Forwarding methods, and a javascript code to cam requests using MediaDevices.getUserMedia. </p>

<p>The MediaDevices.getUserMedia() method prompts the user for permission to use a media input which produces a MediaStream with tracks containing the requested types of media. That stream can include, for example, a video track (produced by either a hardware or virtual video source such as a camera, video recording device, screen sharing service, and so forth), an audio track (similarly, produced by a physical or virtual audio source like a microphone, A/D converter, or the like), and possibly other track types. </p>

[See more about MediaDEvices.getUserMedia() here](https://developer.mozilla.org/en-US/docs/Web/API/MediaDevices/getUserMedia)
<p> To convince the target to grant permissions to access the cam, the page uses a javascript code made by https://github.com/wybiral that turns the favicon into a cam stream.</p>


## Installing (Kali Linux):

```
git clone https://github.com/thelinuxproject/saycheesapp
cd saycheesapp
bash saycheesapp.sh
```
