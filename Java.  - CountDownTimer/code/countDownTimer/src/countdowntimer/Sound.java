/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package countdowntimer;

import javax.sound.sampled.*;
import java.io.IOException;
import java.net.URL;

/**
 *
 * @author raymondli
 */
public class Sound {
    private final Clip clip;

    public Sound(URL url) throws UnsupportedAudioFileException, IOException, LineUnavailableException {
    AudioInputStream audioInputStream = AudioSystem.getAudioInputStream(url);
    clip = AudioSystem.getClip();
    clip.open(audioInputStream);
    }

    public void playAudio() {
        if (clip != null) {
            clip.setFramePosition(0);
            clip.start();
        }
    }

    public void stopAudio() {
        if (clip != null && clip.isRunning()) {
            clip.stop();
        }
    }
}
