

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma Todo List</title>
  <link rel="stylesheet" href="css/component.css">
   
</head>
<body>

    <div class="container">
        <div class="title">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days preview-icon"><path d="M8 2v3"/><path d="M16 2v3"/><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18"/><path d="M8 13h.01"/><path d="M12 13h.01"/><path d="M16 13h.01"/><path d="M8 17h.01"/><path d="M12 17h.01"/><path d="M16 17h.01"/></svg>
        <h1>Ma Todo List</h1>
        </div>

    
        <div class="stats-container">
            <div class="stat-card blue">
                <div class="card_short "><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-layers-arrow-down preview-icon"><path d="M12 7v15"/><path d="M2 12a1 1 0 00.58.91l5.093 2.316"/><path d="M22 12a1 1 0 01-.59.92l-5.077 2.308"/><path d="M8 10.37 2.6 7.91a1 1 0 010-1.831l8.57-3.9a2 2 0 011.66.001l8.59 3.91a1 1 0 010 1.831l-5.392 2.45"/><path d="m9 19 3 3 3-3"/></svg></div>
                <div class="stat-info">
                    <span>Total</span>
                    <strong><?php echo $total_taches; ?></strong>
                </div>
               
            </div>

            <div class="stat-card green">
                <div class="card_short green"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check preview-icon"><path d="M20 6 9 17l-5-5"/></svg></div>
                <div class="stat-info">
                    <span>Terminées</span>
                    <strong><?php echo $taches_terminees; ?></strong>
                </div>
                
            </div>

            <div class="stat-card gray">
                <div class="card_short orange"></div>
                <div class="stat-info">
                    <span>Restantes</span>
                    <strong><?php echo $taches_restantes; ?></strong>
                </div>
               
            </div>
        </div>

        <div class="section-title">
            <i data-lucide="list-todo"></i> Liste des tâches
        </div>

       
        <div class="task-list">
            <?php foreach ($taches as $tache): ?>
                <?php 
                  
                    $priorite_class = '';
                   $priorite_lower = strtolower($tache['priorite']);

if ($priorite_lower == 'haute') {
    $priorite_class = 'priority-haute';
} elseif ($priorite_lower == 'moyenne') {
    $priorite_class = 'priority-moyenne';
} elseif ($priorite_lower == 'basse') {
    $priorite_class = 'priority-basse';
}
                   
                    $description_courte = (strlen($tache['description']) > 80) 
                        ? substr($tache['description'], 0, 80) . '...' 
                        : $tache['description'];

                
                    $date_formatee = date('d/m/Y', strtotime($tache['date_limite']));
                ?>

                <div class="task-card  <?php echo $tache['terminee'] ? 'greenbackground' : ''; ?>">
                    <div class="task-left">
                        <div class="task-checkbox ">
                        
                        </div>
                        <input type="checkbox"  <?php echo $tache['terminee'] ? 'checked' : ''; ?> >
                        <div class="task-content">
                            <h3><?php echo htmlspecialchars($tache['titre']); ?></h3>
                            <p><?php echo htmlspecialchars($description_courte); ?></p>
                        </div>
                    </div>

                    <div class="task-right">
                        <span class="badge-priority <?php echo $priorite_class; ?>">
                            <?php echo htmlspecialchars($tache['priorite']); ?>
                        </span>
                        <div class="task-date">
                            <i data-lucide="calendar" size="14"></i>
                            <?php echo $date_formatee; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

   

</body>
</html>