
 <?php
   include_once 'pheader.php';
  ?>

     <section class="main-container">
       <div class="main-wrapper">
         <?php
           if(isset($_SESSION['p_id'])){
             header("Location:policedepartmentapproval.php");
           }
           else {
             # code... 
             echo '<div class="pbg " >

             </div>
             <div class="ssn ">
               <h3>SHANTI SEWA NYAYA</h3>
             </div>
             <div class="container para ">

             <p>Delhi has a long history of policing throughthe famed institution of the Kotwal. Malikul Umara Faqruddin is said to be thefirst Kotwal of Delhi. He became the Kotwal at the age of 40 in 1237 A.D. andwas also simultaneously appointed as the Naibe-Ghibat (Regent in absence).Because of his integrity and sagacity he had a very long tenure, holding thepost through the reigions of three Sultans Balban, Kaikobad and Kaikhusrau. Onone occasion when some Turkish nobles had approached him to secure the withdrawalof Balbans order. confiscating their estates, the Kotwal is recorded to havesaid, "My words will carry no weight if I accept any bribe from you. It ispresumed that the Kotwal, or Police Head quarters was then located at Qila RaiPithora or todays Mehrauli.



             history bullet Another Kotwalmentioned in history books is Malik Alaul Mulk, who was appointed by SultanAllauddin Khilji in 1297 AD. Sultan Alauddin Khilji once said of him, "Hedeserves the Wizarat (Prime Ministership) but I have appointed him only the Kotwalof Delhi on account of his incapacitating corpulence."



             history bullet  When EmperorShahjahan shifted his capital from Agra to Delhi, in 1648, he appointed Ghaznafar Khan as the firstKotwal of the new city,bestowing on him also the very important office of Mir-i-Atish (Chief ofArtillery).



             history bullet  The institution ofKotwal came to an end with the crushing of the revolt of 1857, the first war offreedom by the British and, interestingly, the last Kotwal of Delhi, appointedjust before the eruption of the first war of freedom, was Gangadhar Nehru,father of Pandit Motilal Nehru and grand father of Pandit Jawaharlal Nehru,Indias first Prime Minister </p>

             </div>
             <hr>
             <div class="contact">
               <div class="container">
               <h2>Contact Details</h2>
               <table class="table table-bordered">
                 <thead>
                   <tr>
                     <th>Office/Police Station</th>
                     <th>Telephone/HelpLine</th>
                   </tr>
                 </thead>
                 <tbody>
                   <tr>
                     <td>Addl.CP/Anti Corruption</td>
                     <td>91-11-23812907, 23812922(Fax)</td>
                   </tr>
                   <tr>
                     <td>ACP/Admin</td>
                     <td>
             91-11-23812923</td>
                   </tr>
                   <tr>
                     <td>Vigilance (Anti Corruption Helpline )   </td>
                     <td>
             1064</td>
                   </tr>
                 </tbody>
               </table>
             </div>
             </div>
             <hr>
             <div class="row-fluid">
               <div class="span12">
                 <div class="span8">
                 </div>
                 <div class="span4">
                   <p class="mainfoot">Delhi Police Department</p>
                 </div>
               </div>
             </div>
';
           }
          ?>

       </div>
     </section>

 <?php
   include_once 'footer.php';
 ?>
