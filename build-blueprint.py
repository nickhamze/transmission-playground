from pathlib import Path
import json, shutil, zipfile
root=Path(__file__).resolve().parent
shutil.copyfile(root.parent/'release/transmission-0.3.0.zip',root/'transmission.zip')
blueprint={
 '$schema':'https://playground.wordpress.net/blueprint-schema.json',
 'meta':{'title':'Transmission for OpenStation','author':'nickhamze','description':'A simpler writing desk over real WordPress posts, with core media and an optional local Codex companion.'},
 'landingPage':'/openstation/',
 'preferredVersions':{'php':'8.3','wp':'7.0'},
 'features':{'networking':False},
 'steps':[
  {'step':'installPlugin','pluginData':{'resource':'bundled','path':'/openstation.zip'},'options':{'activate':True,'targetFolderName':'desktop-mode'}},
  {'step':'installPlugin','pluginData':{'resource':'bundled','path':'/transmission.zip'},'options':{'activate':True,'targetFolderName':'transmission'}},
  {'step':'writeFile','path':'/wordpress/wp-content/mu-plugins/transmission-playground.php','data':{'resource':'bundled','path':'/transmission-playground.php'}},
  {'step':'writeFile','path':'/tmp/first-light.png','data':{'resource':'bundled','path':'/first-light.png'}},
  {'step':'login','username':'admin'},
  {'step':'runPHP','code':(root/'seed.php').read_text()},
 ]}
(root/'blueprint.json').write_text(json.dumps(blueprint,indent=2)+'\n')
with zipfile.ZipFile(root/'transmission-playground.zip','w',zipfile.ZIP_DEFLATED) as z:
 for name in ['blueprint.json','openstation.zip','transmission.zip','transmission-playground.php','first-light.png']:z.write(root/name,name)
print('Built self-contained Playground bundle.')
