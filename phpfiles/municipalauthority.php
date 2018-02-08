
<?php
  include_once 'mheader.php';
 ?>

    <section class="main-container">
      <div class="main-wrapper">
        <?php
          if(isset($_SESSION['m_id'])){
            header("Location:municipalauthorityapproval.php");
          }
          else {
            echo '<div class="mbg">

            </div>
            <div class=" msn">
              NEW DELHI MUNICIPAL COUNCIL
            </div>
            <div class="container para ">

            <p> In 1911 the British Government decided to shift the capital of India from Calcutta to Delhi. On 12th December 1911, it was announced that Delhi would be the place of residence of the Viceroy and the new administrative centre. A Committee was constituted to select the site for the new capital. A number of sites were examined and finally Raisina Hill was selected for building the new capital of India. The English town planners led by Edwin Lutyens and Herbert Baker and others created the present New Delhi with avenues dominated by the palace of the Viceroy (now Rashtrapati Bhawan), Circular Pillar Palace, known as Parliament Secretariat building, green spaces, parks and gardens.

                 The construction of the new capital was a task of great magnitude. It was considered necessary that instead of leaving the control of construction and management to the local authority, a central authority may be entrusted with this work. This resulted in the formation of the constitution of the Imperial Delhi Committee on 25th March, 1913. This was the beginning of the New Delhi Municipal Committee.

                  In February 1916 the Chief Commissioner, Delhi, created the Raisina Municipal Committee. It was upgraded to a 2nd class Municipality under the Punjab Municipal Act on 7th April 1925. This Committee consisted of ten members appointed by the Local Government either by name or by office. In the first Committee so constituted five members were appointed ex-officio and five by name. For the first time public men were included to participate in the deliberation of local affairs/problems. On 9th September 1925, this Committee was allowed to impose tax on buildings and thereby the first source of revenue was created. The Chief Commissioner also transferred many administrative functions to the civic body whose income and expenditure grew noticeably.


                 In accordance with NDMC Act, 1994, an thirteen-member council headed by a Chairperson governs the NDMC. Out of 13 members 2 members of Legislative assembly, 5 from amongst the officers of the Central Government or the Government or their undertakings, to be nominated by the Central Government, 4 members to be nominated by the Central Government in consultation with the Chief Minister of Delhi to represent from amongst eminent personalities . The MP of New Delhi, presenting constituency which comprises wholly or partly the New Delhi area.</p>
            </div>
            <hr>
            <div class="contact">
              <div class="container">
              <h2>Contact Details</h2>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Municipal Department</th>
                    <th>Telephone/HelpLine</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Addl.CP Department</td>
                    <td>91-11-23812907, 23812922(Fax)</td>
                  </tr>
                  <tr>
                    <td>ACP/Admin</td>
                    <td>
            91-11-23812923</td>
                  </tr>
                  <tr>
                    <td>Collector </td>
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
                  <p class="mainfoot">Delhi Municipal Corporation</p>
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
