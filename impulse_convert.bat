@echo off
echo install if not sox 14.4.2 https://sourceforge.net/projects/sox/files/sox/
echo convert wavs to 24 bits 1 channel 48k signed integer no_comment 21ms (~1024 samples)
echo afx@afx.su v.2019-10-16
mkdir converted
FOR %%A IN (*.wav) DO "C:\Program Files (x86)\sox-14-4-2\sox.exe"  "%%A" -b 24 -c 1 -r 48000 -e signed-integer --comment "" --add-comment "" -t wavpcm  ".\converted\%%~nxA" trim 0 0.0213333
echo convert complete!
