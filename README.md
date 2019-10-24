## tools
my dirty command line scripts for audio development. 
You may clean off tags wav file (or all wav files in directory) , then convert it to FIR table and use it in sigmastudio project, or VST, or so on.

* impulse_convert makes clean 48kHz@24bit signed pcm wav for hardware use. Needs sox to be installed. 
* wav2fir convert 24 bit wav to FIR coefficients to use in sigmastudio , or any projects , where impulse coefficients needed. Needs php.
