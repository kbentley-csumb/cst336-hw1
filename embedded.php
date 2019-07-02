<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <title>Kevin Bentley: Computer Science Topics</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <header>
          <h1>Computer Science Topics</h1>
        </header>
        <hr/>
        
        <nav>
          <a href="index.php" >Home</a>
          <a href="gis.php">Geographic Information Systems</a>          
          <a href="embedded.php" class="menuselected">Embedded Systems</a>          
          <a href="ci.php">Continuous Integration</a>
          
        </nav>
        <hr/>
        <div>
          <br/>
          
        </div>
<main>
  <!-- https://commons.wikimedia.org/wiki/File:Industrial-computer.jpg 

https://www.flickr.com/photos/viagallery/6856347184

-->
<div class="topicdetail">

    <div class="floatedright">
        <img src="img/kb-workbench.jpg" class="imgborder" alt="A workbench with an embedded system"/>
        <figcaption>The author's workbench when developing for an Embedded System</figcaption>
</div>
<div class="nofloat">
<h3>Embedded Systems</h3>
<p>
Nearly everyone interacts with embedded systems every day. Your car, microwave oven, tv, and even alarm clock all most likely contain one or more embedded systems. Embedded systems are easy to think of as small computers, but they are really more complex than that. They typically include some sort of microprocessor that interacts with electronics hardware, as well as some read-only memory.
</p>

<p>
One type of Embedded system is a real-time system. In these systems, the processing speed may not be as improtant as the reaction speed. A simple 8-bit processor that can react to a signal within a few microseconds may do a job that a modern 3ghz processor cannot do. That is because an embedded system frequently needs to react very quickly, especially when communications with other devices are involved. Determining the engine speed in a vehicle may involved counting pulses from the engine. If the processor can't react fast enough to count each pulse, the speed will be read incorrectly. Modern, fast CPUs are optimized for overall processing speed, and may be in the middle of a background memory operation, and unable to be interrupted immediately. If an embedded system is only doing one thing at a time, it can react very quickly, even when the clock speed is slower.
</p>

<p>
Working with embedded systems generally requires some low level programming skills in a language such as C. Assembly language programming is frequently needed because of the importance of timing. Some experience with electronics is also helpful. 
</p>

Some of the information on this page came from the following site, where you can find additional information: <a href="https://www.slideshare.net/yayavaram/introduction-to-embedded-systems-2614825">https://www.slideshare.net/yayavaram/introduction-to-embedded-systems-2614825</a>
    </div>
</div>
  
</main>
        <footer>
            CST336 Internet Programming. <br/>
            <details>
            <summary>Background Image</summary>
              Background image from <a href="https://www.pexels.com/photo/technology-computer-lines-board-50711/">https://www.pexels.com/photo/technology-computer-lines-board-50711/</a><br>
            </details>
            2019&copy; Kevin Bentley<br/>
            <strong>Disclaimer</strong> This information is only for academic purposes. The information herein, while accurate, may be incomplete.
                <br/>
                <br/>
                <img src="img/otter-small.jpg" alt="Otter Logo" />
        </footer>
        
    </body>

</html>