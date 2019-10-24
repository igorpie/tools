rem one or multiple file conversion
rem please use "clean" wav files, without a tags 

rem c:/php/php.exe -f wav2fir.php 01_TW73_L19.wav
FOR %%A IN (*.wav) DO c:/php/php.exe -f wav2fir.php  "%%A"


