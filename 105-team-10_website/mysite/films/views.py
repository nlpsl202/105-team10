from django.shortcuts import render_to_response
from films.models import Film

def newAdd(request):
	films = Film.objects.all()
	
	return render_to_response('index.html',locals())
