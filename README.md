# Projeto ASA

## Especificação do projeto
Neste projeto realizaremos a integração dos servidores virtuais já implementados na disciplina, acrescentando uma interface WEB em PHP para a criação de domínios virtuais e seus usuários.

1- Integre os bancos de dados do servidor FTP virtual e do serviço de mensagens. Faça com que consultem a mesma base de usuários e domínios;

2- Crie uma aplicação WEB para que o administrador do servidor, mediante uma senha administrativa, consiga criar/alterar/remover usuários e domínios virtuais;

3- Para cada domínio virtual criado, deverá ser configurado o BIND e o APACHE para responder por ele. O raiz do site www.DOMÍNIO.CRIADO deve ser a pasta base do FTP dos usuários deste domínio. O usuário só verá a pasta do seu site quando logar via FTP (não poderá ter acesso a pastas de outros domínios);

4- EXTRA: crie uma subpasta "adm", abaixo da pasta base de cada domínio, onde somente os usuários deste domínio, mediante autenticação do APACHE, usando o banco de dados dos demais serviços (FTP e mensagens), terão acesso.

*Definimos que os usuários em todos os servidores virtuais serão identificados pelo seu email, na forma: usuario@dominio.criado

## Coisas Para Fazer
#### ~~0. Iniciar o Repositório~~  
#### ~~1. Integração FTP e mensagens~~  
#### ~~2. CRUD banco ftpusers~~  
  * ~~2.1. - Criar página principal (index.html)~~  
    * ~~Link para criar usuário~~  
    * ~~Link para listar usuários~~  
    * ~~Link para criar domínio~~  
    * ~~Link para listar domínios~~  
  * ~~2.2. - Criar páginas (formulários) - Campos nas tabelas 'ftpusers' e 'domains' do banco ASA~~  
    * ~~Formulário para criar usuário (cria_usuario.html)~~  
    * ~~Formulário para alterar usuário (altera_usuario_form.html)~~  
    * ~~Formulário para criar domínio (cria_dominio.html)~~  
    * ~~Formulário para alterar domínio (altera_dominio_form.html)~~  
  * ~~2.3. - Configurar acesso ao banco de dados usando PHP~~  
    * ~~cria_usuario.php~~  
    * ~~altera_usuario.php~~  
    * ~~remove_usuario.php~~  
    * ~~cria_dominio.php~~  
    * ~~altera_dominio.php~~  
    * ~~remove_dominio.php~~  
#### 3. Configuração bind e httpd  
  * ~~3.1. - Criar templates de arquivos~~  
    * ~~named.conf (zona)~~  
    * ~~httpd.conf (VirtualHost e Directory)~~  
    * ~~/var/named/<nome_do_dominio> (arquivo de configuração de zona)~~  
  * ~~3.2. - Criar scripts~~  
    * ~~Inserir os valores nos templates~~  
    * ~~Criar diretório do site (e mudar permissões)~~  
    * ~~Inserir nos arquivos de configuração~~  
    * ~~Recarregar apache e bind (exeroot)~~  
#### ~~4. Extra~~  
  * ~~4.1. - Criação de subpasta adm~~  
  * ~~4.2. - Configurar httpd para consultar tabela ftpusers para Auth~~  
