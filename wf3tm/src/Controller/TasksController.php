<?php

namespace App\Controller;

use App\Entity\Task;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TasksController extends Controller {
    public function tasks() {
        $tasks = [
            (new Task(1, 'Ticket 1', 'Julien', 'Bacon prosciutto bresaola, kielbasa jerky buffalo jowl. Pork chop tri-tip sirloin meatloaf picanha. Frankfurter tongue meatloaf tail leberkas buffalo pancetta. Turducken corned beef pork loin meatball, pork beef ribs doner tenderloin drumstick cow fatback shank. Turkey venison hamburger ball tip bresaola tri-tip buffalo jowl tongue fatback rump. Frankfurter alcatra shank landjaeger boudin short ribs tongue. Turducken corned beef alcatra andouille pork chop strip steak sausage t-bone salami beef sirloin tenderloin leberkas.
            
            Bacon ipsum dolor amet flank capicola sirloin, tail ribeye jerky spare ribs landjaeger pork chop meatloaf bresaola meatball pancetta shank. Tail kielbasa prosciutto, kevin beef meatball bresaola pork chop strip steak ham hock brisket chuck. Bacon turducken andouille meatball. Biltong ball tip sirloin pancetta chuck andouille landjaeger pork loin turducken leberkas alcatra. Buffalo rump bresaola frankfurter. Spare ribs fatback pork belly ham cow pork chop.

            Andouille ham hock pork chop beef leberkas chicken. Tenderloin chicken salami doner, pig corned beef ground round beef spare ribs andouille frankfurter drumstick. Chuck sirloin beef ribs short ribs. Shankle brisket swine ground round pancetta ribeye cow picanha short loin beef ribs turkey bresaola chuck andouille. Shoulder spare ribs tri-tip sausage picanha jerky. Biltong cow andouille brisket rump hamburger pastrami. Ribeye venison cow fatback hamburger ground round.'))->getArray(),
            
            (new Task(2, 'Ticket 2', 'Yohan', 'Bacon ipsum dolor amet flank capicola sirloin, tail ribeye jerky spare ribs landjaeger pork chop meatloaf bresaola meatball pancetta shank. Tail kielbasa prosciutto, kevin beef meatball bresaola pork chop strip steak ham hock brisket chuck. Bacon turducken andouille meatball. Biltong ball tip sirloin pancetta chuck andouille landjaeger pork loin turducken leberkas alcatra. Buffalo rump bresaola frankfurter. Spare ribs fatback pork belly ham cow pork chop.

            Andouille ham hock pork chop beef leberkas chicken. Tenderloin chicken salami doner, pig corned beef ground round beef spare ribs andouille frankfurter drumstick. Chuck sirloin beef ribs short ribs. Shankle brisket swine ground round pancetta ribeye cow picanha short loin beef ribs turkey bresaola chuck andouille. Shoulder spare ribs tri-tip sausage picanha jerky. Biltong cow andouille brisket rump hamburger pastrami. Ribeye venison cow fatback hamburger ground round.

            Bacon prosciutto bresaola, kielbasa jerky buffalo jowl. Pork chop tri-tip sirloin meatloaf picanha. Frankfurter tongue meatloaf tail leberkas buffalo pancetta. Turducken corned beef pork loin meatball, pork beef ribs doner tenderloin drumstick cow fatback shank. Turkey venison hamburger ball tip bresaola tri-tip buffalo jowl tongue fatback rump. Frankfurter alcatra shank landjaeger boudin short ribs tongue. Turducken corned beef alcatra andouille pork chop strip steak sausage t-bone salami beef sirloin tenderloin leberkas.
            
            Brisket boudin bresaola, kielbasa hamburger tail pork loin short ribs corned beef t-bone pork chop swine tongue tenderloin. Shankle beef ribs ribeye swine kevin, short loin pancetta. Shank picanha sausage ribeye. T-bone pastrami tri-tip pork loin, fatback chuck sausage corned beef turducken meatball kevin.'))->getArray(),
            
            (new Task(3, 'Ticket 3', 'Miro', 'Bacon prosciutto bresaola, kielbasa jerky buffalo jowl. Pork chop tri-tip sirloin meatloaf picanha. Frankfurter tongue meatloaf tail leberkas buffalo pancetta. Turducken corned beef pork loin meatball, pork beef ribs doner tenderloin drumstick cow fatback shank. Turkey venison hamburger ball tip bresaola tri-tip buffalo jowl tongue fatback rump. Frankfurter alcatra shank landjaeger boudin short ribs tongue. Turducken corned beef alcatra andouille pork chop strip steak sausage t-bone salami beef sirloin tenderloin leberkas.
            
            Bacon ipsum dolor amet flank capicola sirloin, tail ribeye jerky spare ribs landjaeger pork chop meatloaf bresaola meatball pancetta shank. Tail kielbasa prosciutto, kevin beef meatball bresaola pork chop strip steak ham hock brisket chuck. Bacon turducken andouille meatball. Biltong ball tip sirloin pancetta chuck andouille landjaeger pork loin turducken leberkas alcatra. Buffalo rump bresaola frankfurter. Spare ribs fatback pork belly ham cow pork chop.

            Andouille ham hock pork chop beef leberkas chicken. Tenderloin chicken salami doner, pig corned beef ground round beef spare ribs andouille frankfurter drumstick. Chuck sirloin beef ribs short ribs. Shankle brisket swine ground round pancetta ribeye cow picanha short loin beef ribs turkey bresaola chuck andouille. Shoulder spare ribs tri-tip sausage picanha jerky. Biltong cow andouille brisket rump hamburger pastrami. Ribeye venison cow fatback hamburger ground round.

            Bacon prosciutto bresaola, kielbasa jerky buffalo jowl. Pork chop tri-tip sirloin meatloaf picanha. Frankfurter tongue meatloaf tail leberkas buffalo pancetta. Turducken corned beef pork loin meatball, pork beef ribs doner tenderloin drumstick cow fatback shank. Turkey venison hamburger ball tip bresaola tri-tip buffalo jowl tongue fatback rump. Frankfurter alcatra shank landjaeger boudin short ribs tongue. Turducken corned beef alcatra andouille pork chop strip steak sausage t-bone salami beef sirloin tenderloin leberkas.
            
            Biltong tri-tip strip steak, short ribs ham hock pig andouille sausage chicken. Hamburger picanha flank ham capicola. Venison pastrami bacon, frankfurter landjaeger ham capicola. Leberkas capicola turducken pork belly filet mignon. Porchetta frankfurter hamburger kielbasa meatball ground round shankle picanha chicken chuck sausage. Porchetta beef ribs picanha biltong meatball ham. Kielbasa short loin biltong turkey jerky.'))->getArray(),
            
            (new Task(4, 'Ticket 4', 'Julien', 'Bacon ipsum dolor amet flank capicola sirloin, tail ribeye jerky spare ribs landjaeger pork chop meatloaf bresaola meatball pancetta shank. Tail kielbasa prosciutto, kevin beef meatball bresaola pork chop strip steak ham hock brisket chuck. Bacon turducken andouille meatball. Biltong ball tip sirloin pancetta chuck andouille landjaeger pork loin turducken leberkas alcatra. Buffalo rump bresaola frankfurter. Spare ribs fatback pork belly ham cow pork chop.

            Bacon prosciutto bresaola, kielbasa jerky buffalo jowl. Pork chop tri-tip sirloin meatloaf picanha. Frankfurter tongue meatloaf tail leberkas buffalo pancetta. Turducken corned beef pork loin meatball, pork beef ribs doner tenderloin drumstick cow fatback shank. Turkey venison hamburger ball tip bresaola tri-tip buffalo jowl tongue fatback rump. Frankfurter alcatra shank landjaeger boudin short ribs tongue. Turducken corned beef alcatra andouille pork chop strip steak sausage t-bone salami beef sirloin tenderloin leberkas.

            Ground round capicola meatloaf swine, turducken chuck beef corned beef pork chop beef ribs spare ribs. Drumstick sausage turducken short ribs tongue pancetta meatball short loin shoulder pig doner. Beef ribs frankfurter alcatra chuck. Drumstick frankfurter brisket cupim, short loin beef ribs fatback doner turkey tri-tip shoulder tail alcatra.
            
            Biltong tri-tip strip steak, short ribs ham hock pig andouille sausage chicken. Hamburger picanha flank ham capicola. Venison pastrami bacon, frankfurter landjaeger ham capicola. Leberkas capicola turducken pork belly filet mignon. Porchetta frankfurter hamburger kielbasa meatball ground round shankle picanha chicken chuck sausage. Porchetta beef ribs picanha biltong meatball ham. Kielbasa short loin biltong turkey jerky.'))->getArray()
        ];

        return $this->render(
            'tasks.html.twig',
            [
                'tasks' => $tasks,       
            ]);
    }
}