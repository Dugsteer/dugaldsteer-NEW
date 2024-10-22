/* Stacked Images and Text Section */
#writing {
display: flex;
align-items: center;
justify-content: center;
height: 100%;
background-image: url('https://live.staticflickr.com/65535/49246868201_e783db890a.jpg');
background-size: cover;
background-position: center;
padding: 50px;
color: black;
}

.stacked-images {
flex: 1;
display: flex;
flex-direction: column;
justify-content: space-between;
align-items: center;
max-width: 40%;
}

.stacked-images img {
width: 70%;
height: auto;
margin-bottom: 20px;
border-radius: 10px;
}

.text-content {
flex: 1;
padding: 50px;
text-align: left;
max-width:600px;
}

.text-content h1 {
font-size: 60px;
font-family: "EB Garamond", serif;
color: black;
margin-bottom: 20px;
}

.text-content p {
font-size: 18px;
color: black;
line-height: 1.6;
}

@media (max-width: 992px) {
#writing {
flex-direction: column;
text-align: center;
}

.hider{
display: none;
}

.stacked-images {
max-width: 80%;
margin-bottom: 40px;
}

.text-content {
padding-left: 0;
}

.text-content h1 {
font-size: 40px;
}
}

@media (max-width: 600px) {
.stacked-images img {
margin-bottom: 15px;
}

.text-content h1 {
font-size: 30px;
}

.text-content p {
font-size: 16px;
}
}
