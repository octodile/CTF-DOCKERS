#!/bin/bash

socat tcp4-l:30002,reuseaddr,fork EXEC:"./server.py",pty,ctty,echo=0
# socat -v tcp4-l:30002,reuseaddr,fork EXEC:"./server.py",pty,ctty,echo=0
