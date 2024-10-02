<?php
// In PHP, iterables refer to data structures that can be traversed using loops like foreach
// Applications:
    // Creating custom collection classes that can be easily iterated.
    // Enhancing functions to accept any iterable data type.
    // Implementing design patterns that require element traversal.

class Song {
    public $title;
    public $artist;

    public function __construct($title, $artist) {
        $this->title  = $title;
        $this->artist = $artist;
    }
}

// Implementing the IteratorAggregate interface in Playlist
class Playlist implements IteratorAggregate {
    private $songs = [];

    // Add a song to the playlist
    public function addSong(Song $song) {
        $this->songs[] = $song;
    }

    // Required method for IteratorAggregate
    public function getIterator() {
        return new ArrayIterator($this->songs);
    }
}

// Usage
$playlist = new Playlist();
$playlist->addSong(new Song("Imagine", "John Lennon"));
$playlist->addSong(new Song("Bohemian Rhapsody", "Queen"));
$playlist->addSong(new Song("Ivy", "Frank Ocean"));

foreach ($playlist as $index => $song) {
    echo "Song " . ($index + 1) . ": " . $song->title . " by " . $song->artist . "\n";
    echo "<br><br>";
}
?>