{*
 * Headlist
 *
 * Head list template fragment
 *
 * @author Christopher Han <xiphux@gmail.com>
 * @copyright Copyright (c) 2010 Christopher Han
 * @packge GitPHP
 * @subpackage Template
 *}

 <table>
   {* Loop and display each head *}
   {foreach from=$headlist item=head name=heads}
       {assign var=headcommit value=$head->GetCommit()}
       <tr class="{cycle values="light,dark"}">
         <td><em>{$headcommit->GetAge()|agestring}</em></td>
         <td><a href="{$scripturl}?p={$project->GetProject()|rawurlencode}&amp;a=shortlog&amp;h=refs/heads/{$head->GetName()}" class="list"><strong>{$head->GetName()}</strong></a></td>
         <td class="link"><a href="{$scripturl}?p={$project->GetProject()|rawurlencode}&amp;a=shortlog&amp;h=refs/heads/{$head->GetName()}">{t}shortlog{/t}</a> | <a href="{$scripturl}?p={$project->GetProject()|rawurlencode}&amp;a=log&amp;h=refs/heads/{$head->GetName()}">{t}log{/t}</a> | <a href="{$scripturl}?p={$project->GetProject()|rawurlencode}&amp;a=tree&amp;hb={$headcommit->GetHash()}">{t}tree{/t}</a></td>
       </tr>
   {/foreach}
   {if $hasmoreheads}
       <tr>
       <td><a href="{$scripturl}?p={$project->GetProject()|rawurlencode}&amp;a=heads">&hellip;</a></td>
       </tr>
   {/if}
 </table>

