
<?php  
    
    $textoGeral = 'phone='.$_POST['phone'].'&text='.$_POST['text'].'%0ANome: '.$_POST['nome'].'%0ACPF: '.$_POST['cpf'].'%0ATelefone: '.$_POST['telefone'].'%0AE-mail: '.$_POST['email'];
    header("Location: https://api.whatsapp.com/send?".$textoGeral);
?>
