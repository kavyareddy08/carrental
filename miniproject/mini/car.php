<?php
 session_start();
 if(!isset($_SESSION['username'])){
   header('location:log.php');
 }
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <title>cars</title>
  </head>
  <body>
    <style>
      body{
          background-color: #deebdd;
        
        margin-top: 15px;

      }
      
.btn:hover {
  background-color:red;
}

      
  </style>
  <title>cars</title>
</head>

<body>
  2.<div class="card" style="width: 18rem;">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTO7CKUZ5ycYjs6FlKVg9MC0Gs10fr8hjEEg&usqp=CAU" class="card-img-top" alt="...">
     <img src="https://t3.ftcdn.net/jpg/01/28/24/58/240_F_128245865_yWLOQREPrW7KjdrjTatHp7AY89PXTyPI.jpg" width ="20" height="25" alt="" >petrol
    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>5 seats
<br>
<p style="float: left;" class="card-title">SHIFT BALENO</p><p style="float:right">₹893/DAY</p>

<br>
<br>
<br>
        <a href="bookk.php"  style="position: absolute;
        top: 40%;
        left: 10%;
        transform: translate(-70%, -70%);
        -ms-transform: translate(-50%, -50%);
        background-color:#555;
        color: white;
        font-size: 16px;
        padding: 12px 24px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        text-align: center;
        text-decoration: none;" class="btn btn-primary">BOOK</a>
    </div>

<br>
<br>
<br>
<br>

  3.<div class="card" style="width: 18rem;">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRoQM4o8Ww4-SAcfL-KJp2a1AN8M1up3xNfyg&usqp=CAU" class="card-img-top" alt="...">
      <img src="https://t3.ftcdn.net/jpg/01/28/24/58/240_F_128245865_yWLOQREPrW7KjdrjTatHp7AY89PXTyPI.jpg" width ="20" height="25" alt="" >Diesel
    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>4 seats
<br>
<p style="float: left;" class="card-title">HYUNDAI I20</p><p style="float:right">₹1000/DAY</p>
      <div class="card-body">
       
        <a href="bookk.php"  style="position: absolute; top: 85%; left: 9%;transform: translate(-70%, -70%);-ms-transform: translate(-50%, -50%);background-color:  #555; color: white;font-size: 16px; padding: 12px 24px;border: none;cursor: pointer;border-radius: 5px;text-align: center; text-decoration: none;" class="btn btn-primary">BOOK</a>
      </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    4.<div class="card" style="width: 18rem;">
      <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
      <img src="https://t3.ftcdn.net/jpg/01/28/24/58/240_F_128245865_yWLOQREPrW7KjdrjTatHp7AY89PXTyPI.jpg" width ="20" height="25" alt="" >Diesel
    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>8 seats
<br>
<p style="float: left;" class="card-title">INNOVA CRYSTA</p><p style="float:right">₹1200/DAY</p><div class="card-body">

    
        <a href="bookk.php" style="position: absolute;
        top: 125%;
        left: 10%;
        transform: translate(-70%, -70%);
        -ms-transform: translate(-50%, -50%);
        background-color:  #555;
        color: white;
        font-size: 16px;
        padding: 12px 24px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        text-align: center;
        text-decoration: none;" class="btn btn-primary">BOOK</a>
      </div>
    </div>
<br>
<br>
<br>
<br>
<br>
<br>
    5.<div class="card" style="width: 18rem;">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJ2Bw_gqOolwMKh_AVxeVX-XqC2z5ceL9Z1A&usqp=CAU" class="card-img-top" alt="...">
      <img src="https://t3.ftcdn.net/jpg/01/28/24/58/240_F_128245865_yWLOQREPrW7KjdrjTatHp7AY89PXTyPI.jpg" width ="20" height="25" alt="" >Diesel
    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>6 seats
<br>
<p style="float: left;" class="card-title">SUZUKI BALENO</p><p style="float:right">₹800/DAY</p>
      <div class="card-body">
        
      
        <a href="bookk.php" style=" position: absolute;
        top: 168%;
        left: 10%;
        transform: translate(-70%, -70%);
        -ms-transform: translate(-50%, -50%);
        background-color:  #555;
        color: white;
        font-size: 16px;
        padding: 12px 24px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        text-align: center;
        text-decoration: none;"class="btn btn-primary">BOOK</a>
      </div>
    </div>
    <br>
    <br>
    <br>
    <br><br><br>

   6. <div class="card" style="width: 18rem;">
      <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxASEhUQEhMVFRAVFRUPEBAQEBUQDw8PFRUWFhUVFRUYHSggGBolGxUVITEhJikrLi4vFx8zODMsNygtLisBCgoKDg0OFxAQGi8dHyIrLS0tLS4tLS8tLy0tLy0rLTEtLi0tLS0tKy0tLy0tLy0tKy0rLS0tLSstLTUtLS0tK//AABEIAL4BCQMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAAAwQFBgcBAgj/xABQEAABAwICBQUKCgcGBQUAAAABAAIDBBESIQUGEzFBByJRYXEUMlNkgZGhpLHjFRcjQlJicqLR0hZUY6OywfAkJTNzgpI0lMLT4TVEk7PD/8QAGQEBAAMBAQAAAAAAAAAAAAAAAAECAwQF/8QAKhEAAgICAgIBAwMFAQAAAAAAAAECEQMSITETQQQyUZFhcfAiQoGh0RT/2gAMAwEAAhEDEQA/ANxQhCAEIQgBCEIAQhCAEIQgBCEIAQhCAEIQgBCEIAQhCAEIQgBCEIAQhCAEIQgBCEIAQhCAEIQgBCEICv686y/B1KavZbWz2R7PHs743Yb4rHd2LOvj18R9a92rJy5/+lP/AM6D/wCwL53AVkuCrZsvx6eI+te7XRy5+I+te7WNgJQBTSFs2H48fEfWvdrvx4eI+te7WQBqUbGp1RFs10ct3iPrXu16HLZ4j617tZM2JKthU6IbGq/HT4l6z7tehy0eJes+7WXNgSraZToiNmacOWbxL1n3a6OWTxL1n3azVtKlBSJohszR/jj8S9Z92j44j+pes+7WdikXruRTohszQ/jiP6l6z7tHxxH9S9Z92s87jR3ImiGzNC+OM/qXrPu0fHH4l6z7tZ4aReTSJohszQ/jl8S9Z92ufHN4l6z7tZ0aVeDSqNENmaP8c/iXrPu1w8tPiXrPu1mrqZJOgTRDZmnfHV4l6z7teTy2eI+te7WXugSTolGiGzNU+O7xH1r3a58d/iPrXu1lDo0m5iaomzWjy4eI+te7XPjx8R9a92siLV5IUaoWz6U1A12Gk2Sv2OxMbxHh2u0xXbiv3osrasF5HZ3Nke0HIvBI68K3lu5UfZZHUIQoJBCEIDP+XIf3U/8AzoP4wvnkNX0Ry3j+63/50P8AGF8+Narx6Kvs4GpVrF6ZGnMUKukVEmRJzHAnMNOpCCjVkiBhHTJ3HRqVgoVIwaP6laiCDjoupOY6HqVih0b1J3HozqU0CssoEq2g6laWaN6kqNHdScAqooOpeu4Va/g/qXDQdSWCqdwrhoupWo0PUvBokBVjRLwaJWd1Ek3UanggrJo0m6jVldRpJ1GlArL6NIvo1Z3UaQfRpqTZV5KRNpKZWiSkTSWjVaBWXwJs+JWGalTGanUNEkM5iRc1SUsKaSRqpJeOSP8AxXfaHsW+t3BYJyTC0zvtD2Le27gsZdl10dQhCgkEIQgKHy1j+7Hf50P8awKONfQHLK2+jXf5sX8Sw2GFaw6KSPEMKkKemSlNTKYpKNaJFRClo1M0tB1J3RUKnKSiU9Aj6XR3UpSCg6lJQUqfR06hsURsVCnLKNSLIUoI1WyaI8Uq9dzBP8C4WpYoYdzryadPy1eHNSxRHOgSToVIuCbyBWIGD4Ui+JPJE3e5SiBq6JeDCl3OXnErEDcwJN1MnoXoNQERJSJpLSKxGFIyU6iySqT0ajKikVynpFF1NIgKdUUyj5oVa6qkUTU0yq0STfJY20x+0PYt3buCxDk4Zac9oW3s3BYS7NF0dQhCqSCEIQFL5W230e4ftYv4ljlNTLa+U5l6Ej9pH7Vl9JSrbGuDOXZ5o6RT1FRLtFSKdpKdaEBR0iloIEQRJLSWmaemsJX/ACjso4Y2mWolPQyJt3O8yr2SSUcaQ0lpampheeVkfGxN3nsaM1l+tnKHVul7kpcEBuWyuDxLURkb2ucLsY4C5OEuw7ib81UNkhlqYbl0r3l5BkJe+Q2eG7/pObe3WFHHsM2ao5TqFpwsBdwxPe2Nvblc2Stfr4WRtlZTNexwuJDVWjzyGbY3XHWqHHqZVG5kfDGN5YGbZwHEYQA2/Y7ypfUPA582jpB8hPG6aBp+bI3KVgzNrtIdYbsJWiUHw0ZuT9MmZeVF/wBGljsb5TyykjoPyIy7F4fyou+nSeSGqf7ConROo0M0TtpJI2aKWSnlEeAAOYcicTSec0tfv3OCpumqeGKUsgnM7BvfgwNDvotcCRJ9oADtVGqLKVmjt5TJD86m/wCVqx7Slm8oc53NpneSojv5SCsniqyOKm6DSDcNiSTxbhbbym17eVEkLZoTNeas/wDsonjpirCD5A+IX86eR61TOF3UFQ0dIfC9vodc+ZVDQNSWPycQwi+A3JDrZWPm8i0bQL45Y73OIGzhfd0Zf1uVqpEWQZ1vpMQjkcYZDubUN2d+u/AdZsn8k43g3BzBBuCOpPtOauQVLCyRocOGLeD0tcM2nrCzeu0RXaMJMJMtLe7oXd8wdQG/tFjlxVotBlzdMuCVV3RWnYqhuJhs4d9GTzm9PaFJMnVmqIJVj06jUZBIpGByhgctavRjXY0u0LMuMZIExqKZTjmJvNClgq1XSKGqqVXKogUTVUykDbUiLDUDyLZG7gsn1ajw1LVrDdwXPP6jRdHUIQqkghCEBW+UBl6Qj9oz2qhUlMtE1zbemI+uz2qnU8S3x/SZy7F6WFSJeyNpe8hrGi7nHd/5PUkqdqpuu8s8khiY5oa3JjXvEbMfTnvctIQ2dEN6oV05rQypfHT09VLSPcS0yPaxsT+gF7S5zPtWt2b1mmmHV2j6qeNtWH1BaaeeWJ5LsDw1zm43tGE7rlpuMxfevD6eVshxgiVpucQza4HL+SkaWnhL8cUTQ4N2kwezaiMCwxNBvbO1rcOxdL+HtVMyWauxjRxthp3mzsbg2Nj7XY2Hvnua4ZZuJ/2hOo6SmjftZq2KN7MTNiyOWSXvS0c4ANb0gglOq6Sofa4dh4AE27e1KMMLmhrnviNhtGvbeKRwHfWcCL+ZWfweOH/PyV8/3Q9o9d3TSbF0gdG5rmYxFZznFjmsvbvSXludrKK+EZKaohqGg/2Z8b32zvH3rh/qY4jypxpCjjaxrzIZRiadmQGtePqOjzB67p9orQbapjg2owum+SInixngGc8OuCdwOE3IWM/jZF+v7Exyw76LDyiUjmyOMb3CCrjErgwkMmfEAOdbfeNzDbjgPQsundhNlsWh6KB0UdJV2kfT/IXbUTGNskYwczMWytwGRXdI8mNE/nsMjSc7OeZG+TMH0lVnilxfsmORc/oYkLpzTPcFpjdQ6aMnHDG+3TVzwk9h72/UfQn8WpeiyLmCZg4u2lQ6Mdr2SWHlss3hki6nF9FF0U+S4J3ZebpyV70NWujkDmc5rhmwA3vbMW9K7DyfaKkNoy17t9m1Uxd22EhKa6R5O2MzipWyDjeuqWO8gxZqeV2KTNApapxAv32/DgcMu0pWpjZI3C4ejcsM0jGymdZ9DPE7haonkPaQ2cOA7bJg7TEeO/ddZTmwuyN77dp2s7j6bZLNstqXfW7Uh7H900pwyA4ub3r+3oPX7dyg4dYZnN2WFratrmtcJTgaWHIkde7pBz45L3oWqZIbDTFbnwkLJB5nPKh9NxAVzoHT7bAWASyRtD3Y42vsABhvd1rdnYtIyfX3KtE9q1rQ+aodTPZZzQXYjdjhhtvbmDv3g+RXumkWa0tZFF/hhrHgYQ8NaHYTw5oFxkE4ptaK/wCZGZGg4cWxuy/RiaOzzrq/8mRLlmXli2apE5OWFUfQutxcQyphdCTukFzDf63FnbmOkhXFsn9dXSuaeOUHTRrGSfQ7Xh4Xhsi9FyzouNp2KNqIlKyFM5WqQMNEstVM7P5rTm7gs2oh/ao+w+1aS3cFhPsvHo6hCFUkEIQgIXW3/hz9pvtVRiKtOu0mGmJ+uz2qhsrh0roxq4mc+yeiesf1pHdldK17rRRvdDG0kgOe1pc91gDfIeg9h02nrhcZ8Vl2iKbG9lSSC1ks0k5xXeGTCVpu3cBdoseOI/RUztRIjyy2ah08NSx8FS3FPTODBI0F7pKcg4CbC7gCCL2vuv1WQ6qQRPdO0WY5jo3i1ubiu02O6/H7XUs11PqZaaoacQMktO/aNLXc14kEoZe+ZDXi/QbjeCtK0drFjGCSPE1wLXhpxAtIsRnY8eAXThlkcVJMxyRjbQtWUEcJBc0bPLhuTuDRmjphm1hv5F2kLaiJ1PJfG0WBe0te+PMMksQN9iD1tcqNpnRlZSOJaC5m8EXzC0i3Li6ZR8ei31PJxQvOKNzo3b7sdlfrHFRc2oFTCS6CZpD7MIc23fOFjYbrEB2W7CqdFrtUsNrEEbxiIPpVh0DrzLK9rHXuCX5m4Iwub/1BXXmjesrH9D7Q1qyyhc+evm2cZe5rIaZuKoqZRzjgxHvW3F3vubutfOyump+vVDXWijLmOyAbOA2QXybexIIJyDgd5ANiRfG9Yax1dpCWRx+Sg+RjxC7AWmxNuJMhyHEvYDYZpBtW9rI61ji+MPLSx7cD2t3OHNJGzfct3ixAy3FcWTM5Spvg3jjpWuz6Hr6EXzCipdAhxxMc6N/B8ZI843FVHQmuz45e553ukgOEwzF13iJ4Doznkea4b/QpnSmstVTRmZmGojAdKQYcLtgTzXhzSLgd67IWNiSA4Lpfkxpe7/By6xlL7C9Syuj/AMVrJ2DcZGNlB8pFwU5ZrKLWewsePKx34Kot5YOc1mwikxkNuJ3QgOLsNnXY+3TnwQeVjR7x8tSyNvexY5koNt/RceY59aos+N/VH8cF/FkXTLs3SlPO3BIGOaci2QAg9oKbHViMc6kmfTngyN94MuGycDGPI26rdLrjoWZpdhqGBovI5sBlZGCbAuMZJbfrAT2DS+jCzbRVpay5bikjfA3EN4BlDQ4jjYmyS8D6dfugvKu1ZZ6A1jOZNHHIOEsQDL9rbnPry7E4r9CU9SwsmhBa4WIc0X86qTdcKdne18Z7Zqc//qnEfKDCN9TTntmhHskKylGP9rX+zVTl7TG8nJuGOLrtmYRh+WF5RYktde1i6xwk8cIJzvdl+jclM4vgbgPzgDeN46HMPNd5QrBQ63XF9rFIy9y45PwXF/qu32xNsMxv3HxWcpOjWEtkIBGTudGSDxBZixg9RatY/IyQS25RRwjNum0yBnrI3jBPDs3/AE4xeM+Te30pnS6fdRkMedpSXyw5vhB+dH1dLd3RZPa/lL0NILWv1lsrT6IyqZrBpqF4GCFxjkGOMnEQ8XNrZAg3Fs7cMlss+KcWpcfz0Z+KcZJo1aOqBAc1wcxwxMe0817TxH9ZJYTrPNB09ZSRUe2a5pnNTjpyCHxwAxmKZzPmjE5wJyyeL7lZWaQHSuOk+jp5RPOkSL3KMGkB0rvdoUaix3R/8VH2H2rR27gsy0XJiqY+w+1aa3cFzz+pm0ejqEIVCQQhCAqXKe+1CT+0j9qyNtYela3ypMvQuH7SP2rHhTldGLozn2Poa4gjNQGizXOZJCxsTqEB0cpma28bRJie2N1w+7n5YWmxLs7XupRsRUXXOkY/BGLvM1OQAD3pkDw+wHhGOBPW3quyXREexpUaSkdWMc8ESNfPG75QvjLmsa1xjBAwi7TfM3dizUidN1DXh0ZAt81zQ5ru3j5iFCVlREa8uu1rG4g5xPNMpacTr9LnEntSen9JMDMETmuc7vnMcHBrOi44n2dq6vj5Iwwty+//AAyyxcpqjStHa7xyMaaiGSMxkhlZS2lZGT3zXtdbmmwBbd3AixAIuOiNYoqgWa6OcWz2B+UDel1NJaVvY0P7SvnbVycNc4bR8Tz3ssT3Mc3pBwm9uxWRtTPcOeyKpaDcSx2iqGkcRLDbnfba5YLIpc1Rdxo17SOrWjqskWAk3kC7JW9rTZzfKFTtMao9wPEzJC5ga7I2u0nJoJ8h8y5ovXiUswO/tLWZmCta01UbR85slrSgfS5rurilNMazU9TC6MMqI3nCQwuErHOabtu52JwGbsgRvOS6sLm2q5RjPVfoUrUh7XOsQ7aTPc/K5DwLh7Db5xa/aN6XQgDNyVh0fhpYoiRZ5nhsMTjdkszdqWtzwNBJvuDtmc7ZR2gdCPqmRCGVzJwXCNuzds8bCHBzpWnmEuLWtyOdlL1WiWSbSaaaWKaGZxqDBG2qjic+SVzua14s0EZ4bi73Zb7eadhG0c+0ghJ75jTA7/Q92H7rmjyJ3+kdRT4A0mzbuYQ5zXsPHC4Zjee0Eg3GSZ6DbzZW8Gzvt2ED8E8qILr28Vzwr9jgnSmxZmtsUhvUU1LKc8Rno2Nkd0fLU+Aj/YU5ih0RMObTtYeJbWTsbbp7yctH2g3zKFdo8Hh6EnPRNiaZTlhsR0l18gO0rGXx+G2aLL6LdWaNrHwtptHRU8dKHCR7abSMFRLUy8HTPeWOdbg3CAPNaPh1RrDF3PUUjo8DzLTyyR46duL/ABIpHx4g1pPODtwuR0A0WnnLbZBwHzXtDm9gB3BXbRukKazXBsTTYc0tY0i/Gx6lz4oRzKrpotOUsfNWEWrdW3L4Ohk4Xjkppb/fv5xdOY9G1rd2h236TSU59JCcnSbXlsbRES+SOPmtZiALxe1t2V8wrloqgHM29PHLA2MgOMRdK+W0FszkGAuk7SSPmqubB4vd/wCC2PJv6ooE1JUNkZJPTtgBqqB9mCLCyOMz4nv2WTM5GAk239WUK3VqctBNHG3IXc+tgh4cbyCy1unoYRKAYohHt5Wvc+ljjaKe148OJgNw7C293hwxuDuDWIkhhDC6WnzaJDt+5IsDi67YnvD2fNNnOaLtLNzg6y53r6NVfszim1SixA1E9NFHe72w1Dqqcs4hmEYAesu86sVJrGyjc58U8eyuNjTsp2zGFwGBjmyvFmPwgA2BHWbBMNbdZItsDtI3uETGnufA5pdd5zdGXMBsRcAnsG5Uqq0q6R+N2YAdhBvYGxw2HaumPihDbtv0YtTlKukT2sWslVUF93kuksTncwtYXNAL7c53fX4C1grGKx3E58e1UzVuLGGN6JMHkNj/ADKu09Iq+kyz+wmdInpXRpU9KaS0xTZ8JVbaFF41Jq9pOD0ZLZG7gsP5N2kTntC3Bu4Lmn9TNo9HUIQqkghCEBBa50+0pi367T6VQRoUdC0vTjbxW+sFANpwt8cqRnJclSdoEFQel9SHSWdHK6N4uA4tDxhdvbwyWmCnCO5VdyT7K0YdNyY1PCdh4nExwJPXmVGVPJ5XN3YH/Zdb+Ky+gXUQSbtHDoVdYsm5HzlLqlWs3wOPW17D7DdMpRUQnnB7HDcXAgj/AFf+V9Jv0QDwTOo1eY4WLQR1hPHH0ydn7Pn2PTkwIcTiIzDnZu/3bz51ZdG6x0zyA87N3EPHMvxAcOHbZXrSXJxSyXOzDT0x8w+hVbSPJW4XMUh6myC484V8c8mJ3HkrKMZKmV+i0gYopxE5xdHM/YYCDHicXfLk3zLGt5vQX4vmp8+VtLLSRtLmtEAie9mTxPHI6dz7ZXGKV7CL94Sm8GrFdSPdih2kThhfsnB2QzBAdxHYQm+nNKU72hsIcX4nuxvsDG17Y2lgAJz5mbjbeRbMrnkuTRMV1QbiilP7UelpU1sVSodJyQtwRSFoNi4CxDnWtfMf1kg6dqvDO8zR/Jejh+bDHBRafBy5PjylJtF3bD+PZ2qqaZrn1D8ELHPiYctm0uxv4uyHkHl6VFz6SneLOlkc072l5wntG5JMqZG969zfsuLfYs/kfM8kdYqkXxfH0dvkeOpJmi74ZmjiXROA89l5e10jWuYMeH5MDBjeG5u73fYXOfWAmr6qQ98957XuP80m43359pJXDZ0UOe5ZvAv/APgP4LjoZBvidn0wnNNwB0Be2vb9Eea6A7sH2A2btxNyy18zncj+rLop3fU8ssTf5p1TV2A3EURP14GSDzOBC86UrDO4O2UbHAYfkYmwtcOF2MAbfr9qmhYg+nNs3Rjq2rXfwkpbR9BjfgJvcc0NyxO4MBdlcktGV96bspndQ7SrbqZW6PpnCao2jp2kmOwaYIzwcG98XdfDoyBRLkhsktRtV6uOYGaFzIwcd3jDYta4DI2NycPDgr3NowFIUOtFPN/hvv1FpB9KlGz3XTHozZCyaITaTRJ6FZ8S8uCkgjdUaXZ1AHTmtfbuCzLRYtVR9h9q01u4LlyfUzaPR1CEKhIIQhAMNNH5PyhQjXqV1lfaG/1mqsMqVrBcFJPklWyL2HqMbUJRtQr0RZJBy9AqOFQvYqFFCx+u2CZCoXoVCUB3gC8GBpSInXRMgs5JQsPBRWkNU6KY3lgiefpOjaXf7t6l9qjaqQUmq5KtFvzETmH9nK8DzElRk/I5RnvJZW9uF/8AJaQZFzaJQsyiXkZZ82rcPtU4d7HhN3cjjv1tvlpPeLXi9eSVGqFmQ/E9J+ts/wCVP/cXW8kL+NU3yU1v+ta5dcsmqFmUM5JOmqPkgH5kqOSePjUv8kTB/Nals1wxFKQMxHJXBxnlPkYP5JVnJjSje+Y/62j2NWkbArvcxTgGfR8nFEN7XntkP8k8g1GoW7oBfpcXO9pV2FKV6FIVNoUVmDQUTO9YB2CycChAVgFGUdwpsRqQXcy4YCrAKBd+D03GpWqJtqqPsPtWkN3BUaqp8FXD1td/EFeW7gsZu2aLo6hCFUkEIQgK/rzLhpSfrs9qoUVetS0no6KoZs5W4mXDrXLcxuzBVIr9SnYzsua3gLk+1awmkqZRxbZGtrutKNrutLfoZUfT9AXf0OqPp+gK3kiRqzwK1KNrUfohU/T9A/BdGqNT9P0D8FHkiTqz22sSjasJH9E6r6foH4Lo1VqvCegfgnkQ1Y6bVDpSraoJiNV6vwh8w/BehqzWeE+638E8iGrJAVASgnCjP0crPCfdb+C9DV6t8L91v4J5ENWSglC9B4UV8AV3hfut/Bd+Aa7wv3W/go3Q1ZKgherBRI0HX+F+6z8F34F0h4b7jPwTdDVkuGhew0KGGh9IeG+4z8F34I0h4b7jPyqN0TqTYAXsWUF8E6R8N9xn5V34L0j4b7jPyqNkKJ8WXoWVe+DNI+G+4z8q78G6S8P9xn5VFk0WMALoaFXBo7SXh/3bPyrvcGk/D/u4/wAqWKLJhC7hCrXcOk/D/u4/yrvcWk/D/u4/ypYos2FGFVruPSnh/wB3H+VHcelPD/u4/wAqixR700P7ZT/Yd/EFbm7gqlRaHqnTNlnfjLQQ3mtbYHf3oCtoChknUIQgBCEIAQhCAEIQgBCEIAQhCAEIQgBCEIAQhCAEIQgBCEIAQhCAEIQgBCEIAQhCAEIQgBCEIAQhCA//2Q==" class="card-img-top" alt="...">
      <img src="https://t3.ftcdn.net/jpg/01/28/24/58/240_F_128245865_yWLOQREPrW7KjdrjTatHp7AY89PXTyPI.jpg" width ="20" height="25" alt="" >Diesel
    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>5 seats
<br>
<p style="float: left;" class="card-title">BMW</p><p style="float:right">₹1400/DAY</p>
      <div class="card-body">
        
        <a href="bookk.php" style=" position: absolute;
        top: 212%;
        left: 10%;
        transform: translate(-70%, -70%);
        -ms-transform: translate(-50%, -50%);
        background-color:  #555;
        color: white;
        font-size: 16px;
        padding: 12px 24px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        text-align: center;
        text-decoration: none;"class="btn btn-primary">BOOK</a>
      </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

   7.<div class="card" style="width: 18rem;">
      <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
      <img src="https://t3.ftcdn.net/jpg/01/28/24/58/240_F_128245865_yWLOQREPrW7KjdrjTatHp7AY89PXTyPI.jpg" width ="20" height="25" alt="" >Diesel
      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>9 seats
<br>
<p style="float: left;" class="card-title">MAHIINDRA</p><p style="float:right">₹1600/DAY</p>
      <div class="card-body">
        
        <a href="bookk.php"  style=" position: absolute;
        top: 256%;
        left: 10%;
        transform: translate(-70%, -70%);
        -ms-transform: translate(-50%, -50%);
        background-color:  #555;
        color: white;
        font-size: 16px;
        padding: 12px 24px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        text-align: center;
        text-decoration: none;"class="btn btn-primary">BOOK</a>
      </div>
      
      
    </div>
  </body>
</html>
    
    