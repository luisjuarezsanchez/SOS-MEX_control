import cv2
import uuid

face_cascade = cv2.CascadeClassifier('haarcascade_frontalface_default.xml')

cap = cv2.VideoCapture(0)

while True:
	_, img = cap.read()
	gray = cv2.cvtColor(img ,cv2.COLOR_BGR2GRAY)
	faces = face_cascade.detectMultiScale(gray, 1.1, 4)
	for (x, y, w, h) in faces:
		cv2.rectangle(img, (x,y), (x+w, y+h), (255,0,0), 2)
	cv2.imshow('img', img)
	k = cv2.waitKey(30)
	if k == 27: 
		break

	leido, frame = cap.read()
	if k == ord ('s'):
		nombre_foto = str(uuid.uuid4()) + ".jpg"
		cv2.imwrite("Capturas/" + nombre_foto, frame)
		print("Foto tomada correctamente con el nombre {}".format(nombre_foto))
		mixer.init()
		mixer.music.load ("Sonidos/Alerta.mp3")
		#mixer.music.play ()

			
cap.release() 