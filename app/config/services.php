use Symfony\Component\DependencyInjection\Definition;

$container->setDefinition('app.mailer', new Definition(
'AppBundle\Mailer',
array('sendmail')
));