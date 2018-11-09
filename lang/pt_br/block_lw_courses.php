<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Lang strings for lw_courses block
 *
 * @package    block_lw_courses
 * @copyright  2017 Ello Oliveira >
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['activityoverview'] = 'Você tem {$a}s que precisam de atenção';
$string['alwaysshowall'] = 'Sempre mostrar todos';
$string['collapseall'] = 'Recolher todas as listas de cursos';
$string['configotherexpanded'] = 'If enabled, other courses will be expanded by default unless overridden by user preferences.';
$string['configpreservestates'] = 'If enabled, the collapsed/expanded states set by the user are stored and used on each load.';
$string['lw_courses:addinstance'] = 'Adicionar um novo bloco Meus Cursos';
$string['lw_courses:myaddinstance'] = 'Adicionar um novo bloco Meus Cursos ao Painel';
$string['defaultmaxcourses'] = 'Máximo de cursos padrão';
$string['defaultmaxcoursesdesc'] = 'Máximo de cursos padrão que deve ser mostrado no bloco Meus Cursos, 0 mostra dodos os cursos';
$string['expandall'] = 'Expandir todas as listas de cursos';
$string['forcedefaultmaxcourses'] = 'Forçar máximo de cursos';
$string['forcedefaultmaxcoursesdesc'] = 'Se configurado, o usuário não será capaz de mudar sua configuração pessoal';
$string['fullpath'] = 'Todas as categorias e subcategorias';
$string['hiddencoursecount'] = 'Você possui {$a} curso oculto';
$string['hiddencoursecountplural'] = 'Você possui {$a} cursos ocultos';
$string['hiddencoursecountwithshowall'] = 'Você possui {$a->coursecount} curso oculto ({$a->showalllink})';
$string['hiddencoursecountwithshowallplural'] = 'Você possui {$a->coursecount} cursos ocultos ({$a->showalllink})';
$string['message'] = 'mensagem';
$string['messages'] = 'mensagens';
$string['movecourse'] = 'Mover curso: {$a}';
$string['movecoursehere'] = 'Mover curso para cá';
$string['movetofirst'] = 'Mover curso {$a} para o topo';
$string['moveafterhere'] = 'Mover curso {$a->movingcoursename} para após {$a->currentcoursename}';
$string['movingcourse'] = 'Você está movendo: {$a->fullname} ({$a->cancellink})';
$string['none'] = 'Nenhum(a)';
$string['numtodisplay'] = 'Número de cursos para exibir: ';
$string['onlyparentname'] = 'Apenas categoria pai';
$string['otherexpanded'] = 'Outros cursos expandidos';
$string['pluginname'] = 'Meus Cursos (lw_courses)';
$string['displayname'] = 'Meus Cursos';
$string['preservestates'] = 'preservar estados expandidos';
$string['shortnameprefix'] = 'Inclui {$a}';
$string['shortnamesufixsingular'] = ' (e {$a} outro)';
$string['shortnamesufixprural'] = ' (e {$a} outros)';
$string['showcategories'] = 'Categorias a exibir';
$string['showcategoriesdesc'] = 'Mostrar categorias do curso abaixo cada curso?';
$string['showchildren'] = 'Mostrar filhos';
$string['showchildrendesc'] = 'Listar cursos filhos abaixo do título do curso principal?';
$string['showwelcomearea'] = 'Mostrar boas vindas';
$string['showwelcomeareadesc'] = 'Mostrar área de boas-vindas acima da lista de cursos?';
$string['view_edit_profile'] = '(Ver e editar seu perfil.)';
$string['welcome'] = 'Bem-vindo(a), {$a}';
$string['youhavemessages'] = 'Mensagens não lidas: {$a} ';
$string['youhavenomessages'] = 'Mensagens não lidas: Nenhuma ';

$string['unset'] = "Indefinido";
$string['coursegridwidth'] = "Tamanho da Grade";
$string['coursegridwidthdesc'] = "Selecione a largura da grade de cursos";

$string['fullwidth'] = "largura Total";
$string['splitwidth'] = "2 por linha";
$string['thirdwidth'] = "3 por linha";
$string['quarterwidth'] = "4 por linha";

// Custom LearningWorks Lang strings.

$string['customsettings'] = 'Configurações Personalizadas';
$string['customsettings_desc'] = 'As configurações a seguir são para adições ao bloco de resumo de curso';

$string['courseimagedefault'] = 'Imagem padrão do curso';
$string['courseimagedefault_desc'] = 'Esta imagem será mostrada se um curso não possui uma imagem de resumo do curso.';

$string['lw_courses_bgimage']   = "Incorporar imagens como plano de fundo";
$string['lw_courses_bgimage_desc']   = "isso incorporará imagens ao plano de fundo como uma propriedade CSS";

$string['summary_limit'] = 'Limite de caracteres do Sumário';
$string['summary_limit_desc'] = 'Limita a quantidade de texto a ser exibida como sumário de curso na página inicial do usuário';

$string['showteachers'] = 'Exibir professores';
$string['showteachers_desc'] = 'Isto permitirá que imagens e nomes de professores sejam renderizadas junto a um curso';

$string['progress'] = 'Tipo de Progresso';
$string['progress_desc'] = 'Isto determinará que tipo de notas de curso o bloco tentará renderizar';

$string['progressenabled'] = 'Barra de progresso do curso';
$string['progressenabled_desc'] = 'Isto determinará se a barra de progresso será exibida aos estudantes';

$string['startgrid'] = "Inicializar como grade";
$string['startgrid_desc'] = "Isto renderizará de imediato os cursos como uma grade";
$string['noprogress'] = ": Habilite o acompanhamento da conclusão do curso!";
$string['progressunavail'] = "Progresso Indisponível";
$string['nocompletion'] = "Conclusão não habilitada";
$string['coursehidden'] = "Oculto para os estudantes";
$string['coursehiddentext'] = "Este curso está invisível para os estudantes";