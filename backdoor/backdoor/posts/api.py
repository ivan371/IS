from posts.models import Post
from rest_framework import viewsets, permissions, generics, mixins, serializers
from backdoor.api import router

class PostSerializer(serializers.ModelSerializer):
    class Meta:
        model = Post
        fields = ('id', 'title', 'content')


class PostViewSet(viewsets.ModelViewSet):
    queryset = Post.objects.all()
    serializer_class = PostSerializer

    def perform_create(self, serializer):
        serializer.save(user=self.request.user)

router.register(r'posts', PostViewSet)
